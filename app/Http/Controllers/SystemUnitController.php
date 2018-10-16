<?php

namespace App\Http\Controllers;

use App\System_Unit;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class SystemUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $system_units=System_Unit::all();
        return view('admin.inventorymanagement.system-units.index')->with('system_units',$system_units);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('brand','ASC')->get();
        return view('admin.inventorymanagement.system-units.create')->with('brands',$brands)
                                                                    ->with('category',Category::where('type','asset')->orderBy('category_name','ASC')->get() );
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
            'brand_id'=> 'required',
            'category_id'=> 'required',
        ]);

        $system_unit = System_Unit::create([
            'brand_id'=>$request->brand_id,
            'category_id'=>$request->category_id,
            'model'=>$request->model,
            'asset_tag'=>$request->asset_tag,
            'serial_no'=>$request->serial_no,
            'order_qty'=>0,
            'available'=>$request->total,
            'total'=>$request->total,
            
        ]);
            $notification = array(
                'message' => 'New Unit is successfully added.', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\System_Unit  $system_Unit
     * @return \Illuminate\Http\Response
     */
    public function show(System_Unit $system_Unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\System_Unit  $system_Unit
     * @return \Illuminate\Http\Response
     */
    public function edit(System_Unit $system_Unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\System_Unit  $system_Unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, System_Unit $system_Unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\System_Unit  $system_Unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(System_Unit $system_Unit)
    {
        //
    }
}
