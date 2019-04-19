<?php

namespace App\Http\Controllers;

use App\Floor_Station;
use App\Floor;
use App\Station;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class FloorStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::orderBy('floor_name','ASC')->get();
        $stations = Station::orderBy('station_name','ASC')->get();
        return view('admin.floor-station.index')
                ->with('floors',$floors)
                ->with('stations',$stations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'floor_id'=>'required',
            'station_id'=>'required',
        ]);

        $floor_stations=Floor_Station::where('floor_id','=',Input::get('floor_id'))->where('station_id','=',Input::get('station_id'))->first();
           if($floor_stations === null){
               
               $floor_stations = Floor_Station::create([
                   'floor_id'=>$request->floor_id,
                   'station_id'=>$request->station_id,
               ]);
       
               $notification = array(
                   'message' => 'New Floor Station is successfully added.', 
                   'alert-type' => 'success'
               );
               return redirect()->back()->with($notification);
           }
           
           else{
                $notification = array(
                    'message' => 'New Floor Station has already exists!', 
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
           }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Floor_Station  $floor_Station
     * @return \Illuminate\Http\Response
     */
    public function show(Floor_Station $floor_Station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Floor_Station  $floor_Station
     * @return \Illuminate\Http\Response
     */
    public function edit(Floor_Station $floor_Station)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Floor_Station  $floor_Station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Floor_Station $floor_Station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor_Station  $floor_Station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor_Station $floor_Station)
    {
        //
    }
}
