<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordResetValidation;
use App\Http\Requests\SettingFormValidation;
use App\Repositories\Event\EventInterface;
use App\Repositories\Member\MemberInterface;
use App\Repositories\News\NewsInterface;
use App\Repositories\Resource\ResourceInterface;
use App\Repositories\Setting\SettingInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $base_route = 'dashboard.dashboard';
    protected $view_path = 'dashboard.home';
    protected $panel = 'Dashboard';
    protected $folder = 'setting';
    protected $folder_path;

    public function __construct(SettingInterface $setting, NewsInterface $news, EventInterface $event, ResourceInterface $resource, MemberInterface $member)
    {
            $this->middleware('auth');
            $this->setting = $setting;
            $this->news = $news;
            $this->event = $event;
            $this->resource = $resource;
            $this->member = $member;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 

            
    } 
    
    public function index()
    {   
        
        $data = [];
        $data['news']= $this->news->all();
        $data['events']= $this->event->all();
        $data['resources']= $this->resource->all();
        $data['members']= $this->member->all();
        return view(parent::commonData($this->view_path.'.index'),compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showSettings()
    {
            $data= [];
            $data['settings']= $this->setting->getSettings();
            return view(parent::commonData($this->view_path.'.settings'),compact('data'));
     } 

     public function updateSettings(SettingFormValidation $request)
     {       
        $input = $request->all();
        $data['settings']= $this->setting->getSettings();


        $input =  parent::checkForDefaults($input); 

        if(isset($input['form_image'])){
           $file_name = $this->processImage($request->file('form_image'),$data['settings']);
           $input['featured'] = $file_name;
        }   

         if(isset($input['file_upload'])){
           $file_name = $this->processImage($request->file('file_upload'),$data['settings']);
           $input['members_pdf'] = $file_name;
        }    
        $this->setting->renew($input);
        Session::flash('success','Your Settings Has Been Updated');
        return redirect()->back();
     } 

   
}
