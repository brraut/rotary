<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\AddFormValidation;
use App\Http\Requests\Contact\ReplyFormValidation;
use App\Mail\ContactMail;
use App\Mail\ReplyMail;
use App\Repositories\Contact\ContactInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.contact';
    protected  $view_path  = 'dashboard.contact';
    protected  $panel      = 'Message From Visitors';
    
    

    public function __construct(ContactInterface $contact)
    {
            $this->middleware('auth')->except(['store']);
            $this->middleware('super-admin')->except(['store']);
            

            $this->contact = $contact;
    } 

    public function index()
    {
        $data = [];
        $data['contacts'] = $this->contact->all();
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
        $contactData = $this->contact->save($input);

        // Mail::to(ENV('MAIL_USERNAME'))->send(new ContactMail($contactData));

        Session::flash('success',$this->panel.' created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= [];
        $data['contact'] = $this->contact->findById($id);
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

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contact->remove($id);
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

    public function reply($id , ReplyFormValidation $request)
    {
        $data = [];
        $data['message'] = $this->contact->findById($id);
        $data['reply'] = $request->all();
        // Mail::to($data['message']->email)->send(new ReplyMail($data['reply']));

        Session::flash('Mail delivered created successfully');
        return redirect()->route($this->base_route);
    } 

   
}
