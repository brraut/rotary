<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\AddFormValidation;
use App\Http\Requests\Gallery\EditFormValidation;
use App\Repositories\Gallery\GalleryInterface;
use App\Repositories\Image\ImageInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.gallery';
    protected  $view_path  = 'dashboard.gallery';
    protected  $panel      = 'Gallery';
    protected  $folder     = 'gallery';
    protected  $folder_path;

    public function __construct(GalleryInterface $gallery, ImageInterface $image)
    {
            $this->middleware('auth');
            $this->middleware('super-admin');
            
            $this->gallery = $gallery;
            $this->image = $image;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['galleries'] = $this->gallery->all();
        return view(parent::commonData($this->view_path.'.index'),compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(parent::commonData($this->view_path.'.create'));
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
        $this->gallery->save($input);

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
        $data['gallery'] = $this->gallery->findById($id);
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
        $data['gallery'] = $this->gallery->findById($id);
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
            $file_name = $this->processImage($request->file('form_image'));
            $input['featured'] = $file_name;
         }   
        $this->gallery->renew($id,$input);   
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
        if($this->gallery->findById($id)->images->count() > 0){
            foreach ($this->gallery->findById($id)->images as $key => $image) {
                $this->deleteImage($image);
                $this->image->remove($image->id);
            }
            
        }
        // the below commented code can also be done in order to delete a child when parent is deleted
        // $this->gallery->findById($id)->images()->delete();
        $this->gallery->remove($id);
        
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

    public function createImage($id)
    {
        $data =[ ];
        $data['gallery'] = $this->gallery->findById($id);

        return view(parent::commonData($this->view_path.'.addGallery'),compact('data'));
    } 

    public function storeImage($id, Request $request)
    {
        $input = $request->all();
        if(isset($input['file'])){
           $file_name = $this->processImage($request->file('file'));
           $input['featured'] = $file_name;
        }     
        $this->image->save($input);
        
        return response()->json(['status'=> true, 'Message' => 'Image(s) Uploaded']);         

    } 

    public function images($id)
    {
        $data = [];
        $data['gallery'] = $this->gallery->findById($id);
        return view(parent::commonData($this->view_path.'.gallery'),compact('data')); 
    } 

    public function deleteGalleryImage($id)
    {
        $this->deleteImage($this->image->findById($id));
        $this->image->remove($id);
       
        Session::flash('error','An Image Has Been Deleted.');
        return redirect()->back();
            
    } 
   
}
