<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordResetValidation;
use App\Http\Requests\UsernameResetValidation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected  $base_route = 'dashboard.admin';
    protected  $view_path  = 'dashboard.admin';
    protected  $panel      = 'Admin';
    protected  $folder     = 'admin';
    protected  $folder_path;

    public function __construct()
    {       
            $this->middleware('auth');
            $this->middleware('super-admin')->except(['passwordForm','changePassword','usernameForm','changeUsername']);
    } 
    public function index()
    {
        $data = [];
        $data['users'] = User::all();
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
    public function store(Request $request)
    {
        // dd($request->get('isSuperAdmin'));
        $request->validate([
        'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => $request->get('role')[0],
        ]);


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

        $user = User::findOrFail($id);
        if(!$user->role == 'super-admin' or auth()->user()->id != $id){
        Session::flash('error','An admin was removed from Audan Dashboard');
        $user->delete();
        }else{
            Session::flash('error','This Admin Cannot be delted');
        }
        return redirect()->back();
    }

    public function passwordForm()
    {
            return view(parent::commonData($this->view_path.'.password'));
            
    } 


    public function changePassword(PasswordResetValidation $request)
    {
            $data=[];                     
            $data['new_password'] = $request->get('password');   
            auth()->user()->update(['password'=>bcrypt($data['new_password'])]);
            Session::flash('success','Password Updated Successfully'); 
            return redirect()->route('dashboard.dashboard');
    } 

    public function usernameForm()
    {
            return view(parent::commonData($this->view_path.'.username'));
            
    } 


    public function changeUsername(UsernameResetValidation $request)
    {
        $data=[];                     
        $data['username'] = $request->get('username');   
        auth()->user()->update(['name'=>$data['username']]);
        Session::flash('success','Username Updated Successfully'); 
        return redirect()->route('dashboard.dashboard');
    } 


}
