@extends('layouts.app')

@section('content')
/* Update Component */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('component')}}" class="tip-bottom">View Component List</a></div>
  <h1>Checkout Component</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>{{ucwords($component->component_name)}}</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('component.order',['id'=>$component->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            

            <div class="control-group">
                <label class="control-label">Component Name</label>
                <div class="controls">
                  <input type="hidden" name="component_id" value="{{strtoupper($component->id)}}">
                  <input type="text" class="span6" value="{{strtoupper($component->component_name)}}" disabled>
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
