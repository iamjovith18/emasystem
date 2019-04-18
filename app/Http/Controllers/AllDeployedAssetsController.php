<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accessory_User;
use App\Component_User;
use App\System_Unit;
use App\Category;
use App\Unit_User;
use App\Usercred;
use App\Floor;
use App\Station;


class AllDeployedAssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_accessory = Accessory_User::all();
        $user_components = Component_User::all();
        $user_system_units = Unit_User::all();
        $categories = Category::all();
        $floors = Floor::all();
        return view('admin.inventorymanagement.deployed-assets.index')
                    ->with('user_accessory',$user_accessory)
                    ->with('user_components',$user_components)
                    ->with('user_system_units',$user_system_units)
                    ->with('categories',$categories)
                    ->with('floors',$floors);
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
        //
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
    public function edit($ua_id)
    {
        $user_accessory = Accessory_User::findOrFail($ua_id);
        $usernames = Usercred::orderBy('lname','asc')->get();
        $categories = Category::all();
        $floors = Floor::orderBy('floor_name','ASC')->get();
        $stations = Station::orderBy('station_name','ASC')->get();
        return view('admin.inventorymanagement.deployed-assets.edit')->with('user_accessory',$user_accessory)
                                                                     ->with('usernames',$usernames)
                                                                     ->with('categories',$categories)
                                                                     ->with('floors',$floors)
                                                                     ->with('stations',$stations);
    }

    public function edit_unit($usu_id)
    {
        $unit_user = Unit_User::findOrFail($usu_id);
        $usernames = Usercred::orderBy('lname','asc')->get();
        $categories = Category::all();

        return view('admin.inventorymanagement.deployed-assets.edit-unit')->with('unit_user',$unit_user)
                                                                     ->with('usernames',$usernames)
                                                                     ->with('categories',$categories);
    }

    public function edit_component($uc_id)
    {
        $user_component = Component_User::findOrFail($uc_id);
        $usernames = Usercred::orderBy('lname','asc')->get();
        $categories = Category::all();

        return view('admin.inventorymanagement.deployed-assets.edit-component')->with('user_component',$user_component)
                                                                     ->with('usernames',$usernames)
                                                                     ->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ua_id)
    {
        $this->validate($request,[
            'username_id'=> 'required',
            'floor_id'=>'required',
            'station_id'=>'required',
        ]);
           
        $user_accessory = Accessory_User::findOrFail($ua_id);
        
        $user_accessory->username_id = $request->username_id;
        $user_accessory->floor_id = $request->floor_id;
        $user_accessory->station_id = $request->station_id;


        
        $user_accessory->save();

        $notification = array(
            'message' => 'Accessory has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('all-deployed-assets')->with($notification);
    }

    public function update_unit(Request $request, $usu_id)
    {
        $this->validate($request,[
            'username_id'=>'required'
        ]);

        $unit_user = Unit_User::findOrFail($usu_id);

        $unit_user->username_id = $request->username_id;
        
        $unit_user->save();

        $notification = array(
            'message'=>'Unit has been successfully updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all-deployed-assets')->with($notification);

    }

    public function update_component(Request $request, $uc_id)
    {
        $this->validate($request,[
            'username_id'=>'required'
        ]);

        $user_component = Component_User::findOrFail($uc_id);

        $user_component->username_id = $request->username_id;
        
        $user_component->save();

        $notification = array(
            'message'=>'Asset Component has been successfully updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all-deployed-assets')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ua_id)
    {
        $user_accessory = Accessory_User::findOrFail($ua_id);
        
        $user_accessory->delete();
        $notification = array(
            'message' => 'Accessory has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('all-deployed-assets')->with($notification);
    }

    public function destroy_unit($usu_id)
    {
        $unit_user = Unit_User::findOrFail($usu_id);

        $unit_user->delete();
        $notification = array(
            'message'=>'Unit has been successfully deleted.',
            'alert-type'=>'error'
        );
        return redirect()->route('all-deployed-assets')->with($notification);
    }

    public function destroy_component($uc_id)
    {
        $user_component = Component_User::findOrFail($uc_id);

        $user_component->delete();
        $notification = array(
            'message'=>'Asset Component has been successfully deleted.',
            'alert-type'=>'error'
        );
        return redirect()->route('all-deployed-assets')->with($notification);
    }
}
