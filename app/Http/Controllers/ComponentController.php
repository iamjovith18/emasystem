<?php

namespace App\Http\Controllers;

use App\Component;
use App\Brand;
use App\Category;
use App\Usercred;
use App\Component_User;
use Illuminate\Http\Request;

class ComponentController extends Controller
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
        $components= Component::all();     
        return view('admin.inventorymanagement.component.index')
                ->with('components',$components)
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
        
        $categories = Category::where('type','Component')->OrderBy('category_name','ASC')->get();
        $brands = Brand::orderBy('brand','ASC')->get();
        
        return view('admin.inventorymanagement.component.create')
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
            'component_name'=> 'required',
            'category_id'=> 'required',
            'brand_id'=> 'required'
        ]);

        $component = Component::create([
            'component_name'=>$request->component_name,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'serial_no'=>$request->serial_no,
            'order_qty'=>0,
            'available'=>$request->total,
            'total'=>$request->total,
            
        ]);
            $notification = array(
                'message' => 'New component is successfully added.', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function show(Component $component)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function edit(Component $component, $id)
    {
        $component  = Component::find($id);
        $categories = Category::where('type','component')->OrderBy('category_name','ASC')->get();
        $brands = Brand::orderBy('brand','ASC')->get();
        return view('admin.inventorymanagement.component.edit')
                    ->with('component',$component)
                    ->with('categories',$categories)
                    ->with('brands',$brands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component, $id)
    {
        $this->validate($request,[
            'component_name'=> 'required',
            'category_id'=> 'required',
            'brand_id'=> 'required'
        ]);

        $component  = Component::find($id);
        
        $component->component_name = $request->component_name;
        $component->category_id =$request->category_id;
        $component->brand_id =$request->brand_id;
        $component->serial_no =$request->serial_no;
        $component->total =$request->total;

        $component->save();

        $notification = array(
            'message' => 'Component has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('component')->with($notification);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component, $id)
    {
        $component = Component::find($id);
        $component->delete();

        $notification = array(
            'message' => 'Component has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('component')->with($notification);
    
    }

    public function checkout($id){

        $component  = Component::find($id);
       
        return view('admin.inventorymanagement.component.checkout')->with('component',$component)->with('usernames',Usercred::orderBy('lname','asc')->get() );

    }
    public function order(Request $request, $id){
        $this->validate($request,[
            'component_id'=>'required',
            'username_id'=>'required',
            'order_qty'=> 'required',
        ]);

        $component_user = Component_User::create([
            'component_id'=>$request->component_id,
            'username_id'=>$request->username_id,
        ]); 

        $component = Component::find($id)->increment('order_qty',$request->order_qty);

        $notification = array(
            'message' => 'Component has been successfully checkout.', 
            'alert-type' => 'success'
        );

        return redirect()->route('component')->with($notification);
    }
}
