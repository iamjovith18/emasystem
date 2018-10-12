<?php

namespace App\Http\Controllers;

use App\accessory;
use App\Category;
use App\Brand;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('category_name','ASC')->get();
        $brands = Brand::orderBy('brand','ASC')->get();
        $accessories = accessory::orderBy('accessory_name','ASC')->get();
        return view('admin.inventorymanagement.accessory.index')
                ->with('accessories',$accessories)
                ->with('categories',$categories)
                ->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::orderBy('category_name','ASC')->get();
        $categories = Category::where('type','Accessory')->OrderBy('category_name','ASC')->get();
        $brands = Brand::orderBy('brand','ASC')->get();
        return view('admin.inventorymanagement.accessory.create')
                    ->with('categories',$categories)
                    ->with('brands',$brands);
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
            'accessory_name'=> 'required',
            'category_id'=> 'required',
            'brand_id'=> 'required'
        ]);

        $accessory = accessory::create([
            'accessory_name'=>$request->accessory_name,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'model_no'=>$request->model_no,
            'serial_no'=>$request->serial_no,
            'batch_no'=>$request->batch_no,
            'quantity'=>$request->quantity,
            'min_qty'=>$request->min_qty
            
        ]);
            $notification = array(
                'message' => 'New accessory is successfully added.', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function show(accessory $accessory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit(accessory $accessory, $id)
    {
        $accessory  = accessory::find($id);
        //$categories = Category::orderBy('category_name','ASC')->get();
        $categories = Category::where('type','Accessory')->OrderBy('category_name','ASC')->get();
        $brands = Brand::orderBy('brand','ASC')->get();
        return view('admin.inventorymanagement.accessory.edit')
                    ->with('accessory',$accessory)
                    ->with('categories',$categories)
                    ->with('brands',$brands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accessory $accessory, $id)
    {
        $this->validate($request,[
            'accessory_name'=> 'required',
            'category_id'=> 'required',
            'brand_id'=> 'required'
        ]);
           
        $accessory  = accessory::find($id);
        
        $accessory->accessory_name = $request->accessory_name;
        $accessory->category_id =$request->category_id;
        $accessory->brand_id =$request->brand_id;
        $accessory->model_no =$request->model_no;
        $accessory->serial_no =$request->serial_no;
        $accessory->batch_no =$request->batch_no;
        $accessory->quantity =$request->quantity;
        $accessory->min_qty =$request->min_qty;

        
        $accessory->save();

        $notification = array(
            'message' => 'Accessory has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('accessory')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(accessory $accessory, $id)
    {
        $accessory = accessory::find($id);
        
        $accessory->delete();
        $notification = array(
            'message' => 'Accessory has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('accessory')->with($notification);
    }
}
