<?php

namespace App\Http\Controllers;

use App\Usercred;
use App\Component;
use App\Component_User;
use App\accessory;
use App\Accessory_User;
use App\System_Unit;
use App\Unit_User;
use App\Access;
use App\Access_Usercred;
use Illuminate\Http\Request;
use Session;

class UsercredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usercredentials = Usercred::orderBy('lname','asc')->get();
        $access = Access::OrderBy('access_name','ASC')->get();
        return view('admin.usermanagement.view')->with('usercredentials',$usercredentials)
                                                ->with('access',$access);
    }

    public function employee_access()
    {

        $usercredentials = Usercred::where('status','Suspended')->orWhere('status','Awol')->OrderBy('lname','ASC')->get();
        $access = Access::OrderBy('access_name','ASC')->get();
  
        return view('admin.usermanagement.viewemployeeaccess')->with('usercredentials',$usercredentials)
                                                ->with('access',$access);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Access::orderBy('access_name','ASC')->get();
        
        return view('admin.usermanagement.create')->with('access',$access);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=>'required',
            'job_title'=>'required',
            'email_add'=>'required|unique:usercreds,email_add',
            'domain_name'=>'required',
            'username'=>'required|unique:usercreds,username',
            'user_password'=>'required|min:5',
            'crms_password'=>'required|min:5',
            'department'=>'required',
            //'batch'=>'required',
            'status'=>'required',
    
        ]);

        //dd($request->all());

        $usercreds = Usercred::create([
            'fname'=>$request->firstname,
            'lname'=>$request->lastname,
            'job_title'=>$request->job_title,
            'email_add'=>$request->email_add.''.$request->domain_name,
            'username'=>$request->username,
            'password'=>$request->user_password,
            'crms_password'=>$request->crms_password,
            'department'=>$request->department,
            'batch'=>$request->batch,
            'extension_no'=>$request->extension_no,
            'status'=>$request->status,
            'resigned_date'=>$request->resigned_date,
        ]);
        
        $usercreds->access()->attach($request->access);

        $notification = array(
            'message' => 'New employee is successfully added.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usercred  $usercred
     * @return \Illuminate\Http\Response
     */
    public function show(Usercred $usercred,$id)
    {
        $user= Usercred::findOrFail($id);
        $component_users = Component_User::where('username_id',$user->id)->get();
        $accessory_users = Accessory_User::where('username_id',$user->id)->get();
        $system_users = Unit_User::where('username_id',$user->id)->get();
        
        return view('admin.usermanagement.show',compact('component_users','user'))
                                            ->with('accessory_users',$accessory_users)
                                            ->with('system_users',$system_users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usercred  $usercred
     * @return \Illuminate\Http\Response
     */
    public function edit(Usercred $usercred, $id)
    {
        
        $usercredential  = Usercred::find($id);
        $access = Access::OrderBy('access_name','ASC')->get();
        return view('admin.usermanagement.edit')->with('usercredential', $usercredential)
                                                ->with('access',$access);
    }

    public function edit_employee_access(Usercred $usercred, $id)
    {
        
        $usercredential  = Usercred::find($id);
        $access = Access::OrderBy('access_name','ASC')->get();
        return view('admin.usermanagement.editemployeeaccess')->with('usercredential', $usercredential)
                                                ->with('access',$access);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usercred  $usercred
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usercred $usercred,$id)
    
    {
        $usercredential  = Usercred::find($id);
        $access = Access::OrderBy('access_name','ASC')->get();

        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=>'required',
            'job_title'=>'required',
            'email_add'=>'required',
            'username'=>'required',
            'user_password'=>'required|min:5',
            'crms_password'=>'required|min:5',
            'department'=>'required',
            //'batch'=>'required',
            'status'=>'required'
        ]);
        
        $usercredential = Usercred::findOrfail($id);
        $usercredential->fname =$request->firstname;
        $usercredential->lname =$request->lastname;
        $usercredential->job_title =$request->job_title;
        $usercredential->email_add =$request->email_add;
        $usercredential->username =$request->username;
        $usercredential->password =$request->user_password;
        $usercredential->crms_password =$request->crms_password;
        $usercredential->department =$request->department;   
        $usercredential->batch =$request->batch;
        $usercredential->extension_no =$request->extension_no;
        $usercredential->status =$request->status;
        $usercredential->save();

        $usercredential->access()->sync($request->access);

        $notification = array(
            'message' => 'Employee has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('usermanagement')->with($notification);
        
    }


    

    public function update_employee_access(Request $request, Usercred $usercred,$id)
    {
        
        $usercredential  = Usercred::find($id);
        $access = Access::OrderBy('access_name','ASC')->get();

        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=>'required',
            'job_title'=>'required',
            'email_add'=>'required',
            'username'=>'required',
            'user_password'=>'required|min:5',
            'department'=>'required',
            //'batch'=>'required',
            'status'=>'required'
        ]);
        
        $usercredential = Usercred::findOrfail($id);
        $usercredential->fname =$request->firstname;
        $usercredential->lname =$request->lastname;
        $usercredential->job_title =$request->job_title;
        $usercredential->email_add =$request->email_add;
        $usercredential->username =$request->username;
        $usercredential->password =$request->user_password;
        $usercredential->department =$request->department;   
        $usercredential->batch =$request->batch;
        $usercredential->extension_no =$request->extension_no;
        $usercredential->status =$request->status;
        $usercredential->save();

        $usercredential->access()->sync($request->access);

        $notification = array(
            'message' => 'Employee has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('usermanagement.employee-access')->with($notification);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usercred  $usercred
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usercred $usercred, $id)
    {
        $usercredential = Usercred::find($id);
        $usercredential->delete();

        $notification = array(
            'message' => 'Employee has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('usermanagement')->with($notification);;
    }
}
