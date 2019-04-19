<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Brand;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.inventorymanagement.category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventorymanagement.category.create');
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
            'category'=> 'required|unique:categories,category_name',
            'type'=>'required'
        ]);


        $category = Category::create([
            'category_name'=>$request->category,
            'type'=>$request->type
        ]);
            $notification = array(
                'message' => 'New accessory category is successfully added.', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $category  = Category::find($id);
        return view('admin.inventorymanagement.category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $this->validate($request,[
            'category'=> 'required',
            'type'=>'required'

        ]);
           
        $category  = Category::find($id);

        $category->category_name =$request->category;
        $category->type=$request->type;
        
        $category->save();

        $notification = array(
            'message' => 'Accessory category has been successfully updated.', 
            'alert-type' => 'success'
        );

        return redirect()->route('category')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $category  = Category::find($id);

        foreach($category->accessory as $accessory){
            $accessory->delete();
        }

        foreach($category->component as $component){
            $component->delete();
        }

        foreach($category->system_unit as $system_unit){
            $system_unit->delete();
        }

        $category->delete();

        $notification = array(
            'message' => 'Accessory category has been successfully deleted.', 
            'alert-type' => 'error'
        );
        return redirect()->route('category')->with($notification);
    }
}
