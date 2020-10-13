<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Resource\AddFormValidation;
use App\Http\Requests\Resource\EditFormValidation;
use App\Repositories\Resource\ResourceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class ResourceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.resource';
    protected  $view_path  = 'dashboard.resource';
    protected  $panel      = 'Resources and Publications';
    protected  $folder     = 'resource';
    protected  $folder_path;

    public function __construct(ResourceInterface $resource)
    {
            $this->middleware('auth')->except('download');
            $this->middleware('super-admin')->except('download');

            $this->resource = $resource;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['resources'] = $this->resource->all();
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

        if(isset($input['file_upload'])){
           $file_name = $this->processImage($request->file('file_upload'));
           $input['file'] = $file_name;
        }     
       
        $this->resource->save($input);

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
        $data['resource'] = $this->resource->findById($id);
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
        $data['resource'] = $this->resource->findById($id);
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

        if(isset($input['file_upload'])){
           $file_name = $this->processImage($request->file('file_upload'),$this->resource->findById($id));
           $input['file'] = $file_name;
        }

        if (!isset($input['isConfidential'])) {
           $input['isConfidential'] = 0;
         }     

        $this->resource->renew($id,$input);   
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
        $this->deleteFile($this->resource->findById($id));
        $this->resource->remove($id);
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

    public function download($id)
    {
        $data =[];
        $data['resource'] = $this->resource->findById($id);
        $data['file'] = public_path($this->folder_path.DIRECTORY_SEPARATOR.$data['resource']->file);

        return Response::download($data['file'],$data['resource']->file);

    }


   
}
