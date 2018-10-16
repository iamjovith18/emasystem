@extends('layouts.app')

@section('content')
/* Create New Employee */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('system-unit')}}" class="tip-bottom">View Unit List</a></div>
  <h1>Add New System Unit</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Unit Info</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('system-unit.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Brand Name</label>
                <div class="controls">
                    <select name="brand_id" required>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{strtoupper($brand->brand)}}</option>
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                    <select name="category_id" required >
                        @foreach($category as $c)
                            <option value="{{$c->id}}">{{strtoupper($c->category_name)}}</option>
                        @endforeach
                    </select>      
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Model Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="model" value="{{ old('model') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Asset Tag</label>
                <div class="controls">
                  <input type="text" class="span6" name="asset_tag" value="{{ old('asset_tag') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Serial No.</label>
                <div class="controls">
                  <input type="text" class="span6" name="serial_no" value="{{ old('serial_no') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Total</label>
                <div class="controls">
                  <input type="number" class="span6" name="total" value="1" id="required">
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
