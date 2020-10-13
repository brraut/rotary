<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Member\AddFormValidation;
use App\Http\Requests\Member\EditFormValidation;
use App\Http\Requests\Member\UploadExcelValidation;
use App\Model\Member;
use App\Model\Mtype;
use App\Repositories\Member\MemberInterface;
use App\Repositories\Membership\MembershipTypeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;


class MemberController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $base_route = 'dashboard.member';
    protected  $view_path  = 'dashboard.member';
    protected  $panel      = 'Members';
    protected  $folder     = 'member';
    protected  $folder_path;

    public function __construct(MemberInterface $member, MembershipTypeInterface $type)
    {
            $this->middleware('auth');
            $this->middleware('super-admin');
            
            $this->member = $member;
            $this->type   = $type;
            $this->folder_path = 'uploads'.DIRECTORY_SEPARATOR.$this->folder; 
    } 

    public function index()
    {
        $data = [];
        $data['members'] = $this->member->all();
        $data['mtypes'] = $this->type->all();
        // dd($data['mtypes']);

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
        $data['mtypes'] = $this->type->all();
        $data['positions'] = $this->member->getPositions();


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
        $this->member->save($input);

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
        $data['member'] = $this->member->findById($id);
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
        $data['mtypes'] = $this->type->all();
        $data['member'] = $this->member->findById($id);
        $data['positions'] = $this->member->getPositions();
        
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
           $file_name = $this->processImage($request->file('form_image'),$this->member->findById($id));
           $input['featured'] = $file_name;
        }     
        $this->member->renew($id,$input);   
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
        $this->deleteImage($this->member->findById($id));
        $this->member->remove($id);
        
        Session::flash('error',$this->panel.' deleted.');
        return redirect()->route($this->base_route);
    }

    public function import(UploadExcelValidation $request)
     {  
            $path = $request->file('input_file')->getRealPath();
            $data = Excel::load($path)->get();
            // $all_data = Excel::pluck('roll_no')->toArray();
            

            if ($data->count() > 0) {

                foreach ($data as $key => $value) {
                        $insert_data[] = [
                            'member_id' => $value->member_id,
                            'name' => $value->name,
                            'address' => $value->address,
                            'description' => $value->description,
                            'position' => $value->position,
                            
                            
                        ];
                }



               
                if (!empty($insert_data)) {
                        foreach ($insert_data as $key => $value) {
                            
                            foreach ($value as $another_key => $another) {
                                if($another_key != 'description' and $another == null){
                                   
                                    Session::flash('msg','One or more field is missing');
                                    return redirect()->back();
                                }
                        }
                    }
                    // return redirect()->back();
                }
              

                if (!empty($insert_data)) {
                        foreach ($insert_data as $key => $value) {
                            $database = Member::where('member_id',$value['member_id'])->first();
                            if (isset($database)) {
                               $database->update($value);
                              
                               if (isset($value['mtype_id'])) {
                                    $database->mtypes()->sync($value['mtype_id']);
                                }
                            }else{
                            $membership = Member::create($value);
                            if (isset($value['mtype_id'])) {
                            $membership->mtypes()->attach($value['mtype_id']);
            }
                            }
                    }
                }
            }
            return redirect()->back();
    } 

    public function updateMembership(Request $request)
    {
        
            $updateable_id = $request->get('update_id');
            $updateables = Member::whereIn('id',$updateable_id)->get();
            foreach ($updateables as $key => $value) {
             $membership_types = array_column($request->get('mtype_id'), $value->id);
             $value->mtypes()->sync($membership_types);
            }
            // dd($request->get('mtype_id'));

            // foreach($updateables as $key=>$value){
            //     $value->mtypes()->sync($request->get('mtype_id')[$key]);

            //     // dd($request->get('mtype_id')[$key]);
            // }

            
            // foreach ($request->get('mtype_id') as $key => $value) {
            //     dd($request->get('mtype_id')[0]);
                
            //     $member = Member::find($key);
            //     if(isset($member)){                    
            //         $member->mtypes()->sync($value);
            //     }
            // }

            return redirect()->back();
    } 



   
}
