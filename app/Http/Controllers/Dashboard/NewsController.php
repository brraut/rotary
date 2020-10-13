<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\AddFormValidation;
use App\Http\Requests\News\EditFormValidation;
use App\Repositories\NewsCategory\NewsCategoryInterface;
use App\Repositories\News\NewsInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.news';
    protected  $view_path  = 'dashboard.news';
    protected  $panel      = 'News';
    protected  $folder     = 'news';
    protected  $folder_path;

    public function __construct(NewsInterface $news, NewsCategoryInterface $category)
    {
            $this->middleware('auth')->except('download');
            $this->middleware('super-admin')->except('download');

            $this->news = $news;
            $this->category   = $category;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['news'] = $this->news->all();
        return view(parent::commonData($this->view_path.'.index'),compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        $data['categories'] = $this->category->all();

        return view(parent::commonData($this->view_path.'.create'),compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddFormValidation $request)
    {

        $input = $request->all();
        $input =  parent::checkForDefaults($input); 
        if(isset($input['form_image'])){
           $file_name = $this->processImage($request->file('form_image'));
           $input['featured'] = $file_name;
        }
         if(isset($input['file_upload'])){
           $file_name = $this->processImage($request->file('file_upload'));
           $input['file'] = $file_name;
        }     
        $this->news->save($input);

        Session::flash('success',$this->panel.' created successfully');
        return redirect()->route($this->base_route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=[];
        $data['news'] = $this->news->findById($id);
        return view(parent::commonData($this->view_path.'.show'),compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= [];
        $data['categories'] = $this->category->all();
        $data['news'] = $this->news->findById($id);
        return view(parent::commonData($this->view_path.'.edit'),compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditFormValidation $request, $id)
    {
        $input = $request->all();  
        $input =  parent::checkForDefaults($input);  
         if(isset($input['form_image'])){
           $file_name = $this->processImage($request->file('form_image'),$this->news->findById($id));
           $input['featured'] = $file_name;
           // (string) Image::make($this->folder_path.DIRECTORY_SEPARATOR.$input['featured'])->encode('webp', 75);

        }     

        // dd($this->folder_path.DIRECTORY_SEPARATOR.$input['featured']);

        if(isset($input['file_upload'])){
           $file_name = $this->processImage($request->file('file_upload'),$this->news->findById($id));
           $input['file'] = $file_name;
        }     
        $this->news->renew($id,$input);   
        Session::flash('success',$this->panel.' updated successfully'); 
        return redirect()->route($this->base_route);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->deleteImage($this->news->findById($id));
        $this->deleteFile($this->news->findById($id));
        $this->news->remove($id);
        
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

    public function download($id)
    {
        $data =[];
        $data['news'] = $this->news->findById($id);
        $data['file'] = public_path($this->folder_path.DIRECTORY_SEPARATOR.$data['news']->file);

        return Response::download($data['file'],$data['news']->file);

    }

   
}
