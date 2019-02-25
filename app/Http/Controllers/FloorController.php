<?php

namespace App\Http\Controllers;

use App\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::OrderBy('floor_name','ASC')->get();
        return view('admin.inventorymanagement.floor.index')->with('floors',$floors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventorymanagement.floor.create');

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
            'floor_name'=>'required | unique:Floors'
        ]);

        $floor = Floor::create([
            'floor_name'=>$request->floor_name,
        ]);
        
        $notification = array(
            'message' => 'New Station Name is successfully added.', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show(Floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit(Floor $floor, $id)
    {
        $floor = Floor::findOrFail($id);
        return view('admin.inventorymanagement.floor.edit')->with('floor',$floor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Floor $floor, $id)
    {
        $this->validate($request,[
            'floor_name'=>'required | Unique:Floors',
        ]);

        $floor = Floor::findOrFail($id);

        $floor->floor_name = $request->floor_name;
        $floor->save();

        $notification = array(
            'message'=>'Floor Name has been successully updated',
            'alert-type'=>'success'
        );

        return redirect()->route('floor')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor $floor, $id)
    {
        $floor  = Floor::find($id);
        $floor->delete();

        $notification = array(
            'message' => 'Station Name has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('floor')->with($notification);
    }
}
