<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::OrderBy('station_name','ASC')->get();
        return view('admin.inventorymanagement.computer_stations.index')->with('stations',$stations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventorymanagement.computer_stations.create');
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
            
            'station_name'=> 'required|unique:Stations'
        ]);

        $station = station::create([
            
            'station_name'=>$request->station_name,
            
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
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station, $id)
    {
        $station = Station::findOrFail($id);
        return view('admin.inventorymanagement.computer_stations.edit')->with('station',$station);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station, $id)
    {
        $this->validate($request,[
            'station_name'=> 'required | Unique:Stations',
        ]);
           
        $station  = Station::find($id);

        $station->station_name =$request->station_name;
        
        $station->save();

        $notification = array(
            'message' => 'Station Name has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('station')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station, $id)
    {
        $station  = Station::find($id);
        $station->delete();

        $notification = array(
            'message' => 'Station Name has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('station')->with($notification);
    }
}
