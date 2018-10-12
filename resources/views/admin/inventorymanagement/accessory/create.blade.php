@extends('layouts.app')

@section('content')
/* Create New Employee */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('accessory')}}" class="tip-bottom">View Accessory List</a></div>
  <h1>Add New Accessory</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Accessory Info</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('accessory.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Accessory Name</label>
                <div class="controls">
                  <input type="text" autofocus class="span6" name="accessory_name" value="{{ old('accessory_name') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                    <select name="category_id" required >
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>      
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Brand Name</label>
                <div class="controls">
                    <select name="brand_id" required>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand}}</option>
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Model No.</label>
                <div class="controls">
                  <input type="text" class="span6" name="model_no" value="{{ old('model_no') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Serial No.</label>
                <div class="controls">
                  <input type="text" class="span6" name="serial_no" value="{{ old('serial_no') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Batch No.</label>
                <div class="controls">
                  <input type="text" class="span6" name="batch_no" value="{{ old('batch_no') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Quantity</label>
                <div class="controls">
                  <input type="number" class="span6" name="quantity" value="1" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Min Qty</label>
                <div class="controls">
                  <input type="number" class="span6" name="min_qty" value="1" id="required">
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
