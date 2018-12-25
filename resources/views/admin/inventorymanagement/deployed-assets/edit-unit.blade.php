@extends('layouts.app')

@section('content')
/* all deployed asset for UNITS */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('all-deployed-assets')}}" class="tip-bottom">View All Deployed Asset Lists</a></div>
  <h1>Update</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>{{ucwords($unit_user->system_unit->brand->brand)}}</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('all-deployed-assets.update-unit',['id'=>$unit_user->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            

            <div class="control-group">
                <label class="control-label">Unit Name</label>
                <div class="controls">
                  <input type="hidden" name="system_unit_id" value="{{strtoupper($unit_user->system_unit->id)}}">
                  <input type="text" class="span6" value="{{strtoupper($unit_user->system_unit->model)}}" disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Employee Name</label>
                <div class="controls">
                    <select name="username_id" required >
                        @foreach($usernames as $u)
                            <option value="{{$u->id}}" @if($unit_user->users->id ==$u->id) selected @endif>{{strtoupper($u->lname . ', '. $u->fname)}}</option>
                        @endforeach
                    </select>      
                </div>
            </div>    
            <div class="control-group">
                <label class="control-label">Quantity</label>
                <div class="controls">
                  <input type="number" class="span6" name="order_qty" value="1" id="required" readonly>
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
