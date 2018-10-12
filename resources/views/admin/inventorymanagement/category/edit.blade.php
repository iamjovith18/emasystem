@extends('layouts.app')

@section('content')
/* Create New Employee */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('category')}}" class="tip-bottom">View Category List</a></div>
  <h1>Edit Category</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Category</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('category.update',['id'=>$category->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="category" value="{{$category->category_name }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">type</label>
                <div class="controls">
                  <select name="type" required >
                    <option value="{{$category->type}}">{{$category->type}}</option>
                    <option value="Accessory">Accessory</option>
                    <option value="Asset">Asset</option>
                    <option value="Consumable">Consumable</option>
                    <option value= "Component">Component</option>
                    <option value="License">License</option>
                  </select>
                </div>
            </div>
            <div class="form-actions">
                <input type="submit" value="Save" class="btn btn-success">
              </div>

          </form>
        </div>
      </div>

    </div>
  
  </div>
  
</div></div>

@endsection
