@extends('layouts.app')

@section('content')
/* Update Component */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('accessory')}}" class="tip-bottom">View Component List</a></div>
  <h1>Update Component</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Info</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('component.update',['id'=>$component->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                  <input type="text" autofocus class="span6" name="component_name" value="{{$component->component_name }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                    <select name="category_id" required >
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($component->category->id==$category->id) selected @endif > {{$category->category_name}}</option>
                        @endforeach
                    </select>      
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Brand Name</label>
                <div class="controls">
                    <select name="brand_id" required>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}" @if($component->brand->id==$brand->id) selected @endif > {{$brand->brand}}</option>
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Serial No.</label>
                <div class="controls">
                  <input type="text" class="span6" name="serial_no" value="{{ $component->serial_no }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Total</label>
                <div class="controls">
                  <input type="number" class="span6" name="total" value="{{$component->total}}" id="required">
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
