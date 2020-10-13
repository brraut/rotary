<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Funding\AddFormValidation;
use App\Http\Requests\Funding\EditFormValidation;
use App\Repositories\Funding\FundingInterface;
use App\Repositories\FundingSource\FundingSourceInterface;
use App\Repositories\Campaign\CampaignInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FundingController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.funding';
    protected  $view_path  = 'dashboard.funding';
    protected  $panel      = 'Funding Us';
    protected  $folder     = 'funding';
    protected  $folder_path;

    public function __construct(FundingInterface $funding, FundingSourceInterface $category, CampaignInterface $campaign)
    {
            $this->middleware('auth');
            $this->middleware('super-admin');
            $this->funding = $funding;
            $this->category = $category;
            $this->campaign = $campaign;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['fundings'] = $this->funding->all();
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
        $data['campaigns'] = $this->campaign->all();


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
        
        $this->funding->save($input);

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
        $data['funding'] = $this->funding->findById($id);
        $data['funding_source'] = $data['funding']->funding_source()->first();
        $data['campaign'] = $data['funding']->campaign()->first();

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
        $data['funding'] = $this->funding->findById($id);
        $data['categories'] = $this->category->all();
        $data['campaigns'] = $this->campaign->all();
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
         
        $this->funding->renew($id,$input);   
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
        $this->funding->remove($id);
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

   
}
