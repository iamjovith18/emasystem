<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.administrator.index')->with('users',User::orderBy('name')->get() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrator.create');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6',
        ]);


        $administrator = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>hash::make($request->password)
        ]);
            $notification = array(
                'message' => 'New administrator is successfully added.', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
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
        $administrator = User::findOrFail($id);

        return view('admin.administrator.edit')->with('administrator',$administrator);
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
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
        ]);

        $administrator  = User::find($id);

    
        
        $administrator->name = $request->name;
        $administrator->email =$request->email;  
        $administrator->save();

        $notification = array(
            'message' => 'Administrator has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('administrator')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrator = User::find($id);
        
        $administrator->delete();
        $notification = array(
            'message' => 'User has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('administrator')->with($notification);
    }
}
