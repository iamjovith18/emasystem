@extends('layouts.app')

@section('content')
/* checkup accessory */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('component')}}" class="tip-bottom">View Component List</a></div>
  <h1>Checkout Accessory</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>{{ucwords($accessory->accessory_name)}}</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('accessory.order',['id'=>$accessory->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            

            <div class="control-group">
                <label class="control-label">Accessory Name</label>
                <div class="controls">
                  <input type="hidden" name="accessory_id" value="{{strtoupper($accessory->id)}}">
                  <input type="text" class="span6" value="{{strtoupper($accessory->accessory_name)}}" disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Employee Name</label>
                <div class="controls">
                    <select name="username_id" required >
                        @foreach($usernames as $u)
                            <option value="{{$u->id}}">{{strtoupper($u->lname . ', '. $u->fname)}}</option>
                        @endforeach
                    </select>      
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Floor & Station Name</label>
                <div class="controls">
                    <select name="floor_id" required>
                        @foreach($floors as $f)
                            <option value="{{$f->id}}">{{strtoupper($f->floor_name)}}</option>
                        @endforeach
                    </select>
                    <select name="station_id" required >
                        @foreach($stations as $s)
                            <option value="{{$s->id}}">{{strtoupper($s->station_name)}}</option>
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
