<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Phf\AddFormValidation;
use App\Http\Requests\Phf\EditFormValidation;
use App\Repositories\Phf\PhfInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PhfController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.phf';
    protected  $view_path  = 'dashboard.phf';
    protected  $panel      = 'Phf Us';
    protected  $folder     = 'phf';
    protected  $folder_path;

    public function __construct(PhfInterface $phf)
    {
            $this->middleware('auth');
            $this->middleware('super-admin');
            $this->phf = $phf;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['phfs'] = $this->phf->all();
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
       
        $this->phf->save($input);

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
        $data['phf'] = $this->phf->findById($id);
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
        $data['phf'] = $this->phf->findById($id);
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
       
        $this->phf->renew($id,$input);   
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
        $this->phf->remove($id);
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

   
}
