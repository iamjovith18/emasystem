<?php

namespace App\Http\Controllers;

use App\Usercred;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $brands = Brand::all();
        return view('admin.inventorymanagement.brands.index')->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventorymanagement.brands.create');
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
            'brand'=> 'required|Unique:brands'
        ]);


        $brand = Brand::create([
            'brand'=>$request->brand,
        ]);
            $notification = array(
                'message' => 'New brand is successfully added.', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand, $id)
    {
        $brand  = Brand::find($id);
        return view('admin.inventorymanagement.brands.edit')->with('brand', $brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand, $id)
    {
        
        $this->validate($request,[
            'brand'=> 'required|Unique:brands'
        ]);
           
        $brands  = Brand::find($id);

        $brands->brand =$request->brand;
        
        $brands->save();

        $notification = array(
            'message' => 'Brand has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('brand')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand, $id)
    {
        $brands  = Brand::find($id);
        $brands->delete();

        $notification = array(
            'message' => 'Brand has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('brand')->with($notification);;
    }
}
