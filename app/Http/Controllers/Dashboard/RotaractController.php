<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Rotaract\AddFormValidation;
use App\Http\Requests\Rotaract\EditFormValidation;
use App\Repositories\Rotaract\RotaractInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RotaractController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.rotaract';
    protected  $view_path  = 'dashboard.rotaract';
    protected  $panel      = 'Rotaract Us';
    protected  $folder     = 'rotaract';
    protected  $folder_path;

    public function __construct(RotaractInterface $rotaract)
    {
            $this->middleware('auth');
            $this->middleware('super-admin');
            $this->rotaract = $rotaract;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['rotaracts'] = $this->rotaract->all();
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
        $this->rotaract->save($input);

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
        $data['rotaract'] = $this->rotaract->findById($id);
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
        $data['rotaract'] = $this->rotaract->findById($id);
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
            $file_name = $this->processImage($request->file('form_image'),$this->rotaract->findById($id));
            $input['featured'] = $file_name;
         }   
        $this->rotaract->renew($id,$input);   
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
        $this->rotaract->remove($id);
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

   
}
