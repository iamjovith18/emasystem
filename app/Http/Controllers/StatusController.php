<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::orderby('status_name','ASC')->get();
        return view('admin.usermanagement.status.index')->with('status',$status);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usermanagement.status.create');
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
            'status_name'=>'required|Unique:statuses'
        ]);

        $status = Status::create([
            'status_name'=>$request->status_name,
        ]);
        
        $notification = array(
            'message'=> 'New Status is successfully added',
            'alert-type'=> 'success'
        );

        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status, $id)
    {
        $status  = Status::find($id);
        return view('admin.usermanagement.status.edit')->with('status', $status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status, $id)
    {
        $this->validate($request,[
            'status_name'=> 'required|Unique:Statuses'
        ]);
           
        $status  = Status::find($id);

        $status->status_name =$request->status_name;
        
        $status->save();

        $notification = array(
            'message' => 'Status has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('status')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status,$id)
    {
        $status  = Status::find($id);
        $status->delete();

        $notification = array(
            'message' => 'Status has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('status')->with($notification);;
    }
}
