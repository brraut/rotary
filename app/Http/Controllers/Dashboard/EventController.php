<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event\AddFormValidation;
use App\Http\Requests\Event\EditFormValidation;
use App\Repositories\Event\EventInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.event';
    protected  $view_path  = 'dashboard.event';
    protected  $panel      = 'Events and Activities';
    protected  $folder     = 'event';
    protected  $folder_path;

    public function __construct(EventInterface $event)
    {
            $this->middleware('auth');
            $this->middleware('super-admin');

            $this->event = $event;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['events'] = $this->event->all();
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
        // dd($request->all());
        $input = $request->all();
        $input =  parent::checkForDefaults($input); 

        if(isset($input['form_image'])){
           $file_name = $this->processImage($request->file('form_image'));
           $input['featured'] = $file_name;
        }     
       
        $this->event->save($input);

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
        $data['event'] = $this->event->findById($id);
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
        $data['event'] = $this->event->findById($id);
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
        if(!isset($input['start_date'])){
            $input['start_date'] = null;
        }
        $this->event->renew($id,$input);   
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
        $this->deleteImage($this->event->findById($id));
        $this->event->remove($id);
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

   
}
