<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $access = Access::orderby('access_name','ASC')->get();
        return view('admin.usermanagement.access.index')->with('access',$access);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usermanagement.access.create');
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
            'access_name'=>'required|Unique:accesses'
        ]);

        $access = Access::create([
            'access_name'=>$request->access_name,
        ]);
        
        $notification = array(
            'message'=> 'New Access is successfully added',
            'alert-type'=> 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function show(Access $access)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function edit(Access $access, $id)
    {
        $access  = Access::find($id);
        return view('admin.usermanagement.access.edit')->with('access', $access);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Access $access, $id)
    {
        $this->validate($request,[
            'access_name'=> 'required|Unique:Accesses'
        ]);
           
        $access  = Access::find($id);

        $access->access_name =$request->access_name;
        
        $access->save();

        $notification = array(
            'message' => 'Access has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('access')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function destroy(Access $access, $id)
    {
        $access  = Access::find($id);
        $access->delete();

        $notification = array(
            'message' => 'Access has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('access')->with($notification);
    }
}
