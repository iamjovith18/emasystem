@extends('layouts.app')

@section('content')
/* checkout Units */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('system-unit')}}" class="tip-bottom">View Units List</a></div>
  <h1>Checkout Unit</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>{{ucwords($units->brand->brand)}}</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('system-unit.order',['id'=>$units->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Asset Name</label>
                <div class="controls">
                  <input type="hidden" name="system_unit_id" value="{{strtoupper($units->id)}}">
                  <input type="text" class="span6" value="{{strtoupper($units->brand->brand .' '. $units->model)}}" disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Employee Name</label>
                <div class="controls">
                    <select name="username_id" required >
                        @foreach($usernames as $username)
                            <option value="{{$username->id}}">{{strtoupper($username->username)}}</option>
                        @endforeach
                    </select>      
                </div>
            </div>    
            <div class="control-group">
                <label class="control-label">Quantity</label>
                <div class="controls">
                  <input type="number" class="span6" name="order_qty" value="1" id="required">
                </div>
            </div>    
            <div class="form-actions">
                <input type="submit" value="Checkout" class="btn btn-success">
              </div>

          </form>
        </div>
      </div>

    </div>
  
  </div>
  
</div></div>

@endsection
