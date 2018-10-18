<?php

namespace App\Http\Controllers;

use App\System_Unit;
use App\Brand;
use App\Category;
Use App\Usercred;
Use App\Unit_User;
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
    public function edit(System_Unit $system_Unit, $id)
    {
        $system_units  = System_Unit::findOrFail($id);
        $categories = Category::where('type','asset')->OrderBy('category_name','ASC')->get();
        $brands = Brand::orderBy('brand','ASC')->get();
        return view('admin.inventorymanagement.system-units.edit')
                    ->with('system_units',$system_units)
                    ->with('categories',$categories)
                    ->with('brands',$brands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\System_Unit  $system_Unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, System_Unit $system_Unit, $id)
    {
        $this->validate($request,[
            'category_id'=> 'required',
            'brand_id'=> 'required'
        ]);

        $system_units  = System_Unit::find($id);
        
        $system_units->brand_id =$request->brand_id;
        $system_units->category_id =$request->category_id;
        $system_units->model = $request->model;
        $system_units->asset_tag = $request->asset_tag;
        $system_units->serial_no =$request->serial_no;
        $system_units->total =$request->total;

        $system_units->save();

        $notification = array(
            'message' => 'Unit has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('system-unit')->with($notification);
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

    public function checkout($id){

        $units  = System_Unit::find($id);
       
        return view('admin.inventorymanagement.system-units.checkout')->with('units',$units)->with('usernames',Usercred::orderBy('lname','asc')->get() );

    }
    public function order(Request $request, $id){
        $this->validate($request,[
            'system_unit_id'=>'required',
            'username_id'=>'required',
            'order_qty'=> 'required',
        ]);

        $unt_user = Unit_User::create([
            'system_unit_id'=>$request->system_unit_id,
            'username_id'=>$request->username_id,
        ]); 

        $system_units = System_Unit::find($id)->increment('order_qty',$request->order_qty);

        $notification = array(
            'message' => 'Asset Unit has been successfully checkout.', 
            'alert-type' => 'success'
        );

        return redirect()->route('system-unit')->with($notification);
    }
}
