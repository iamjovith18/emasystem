@extends('layouts.app')

@section('content')
/* checkup accessory */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  <h1>Floor Station</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Floor & Station</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('floor-station.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
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
            <div class="form-actions">
                <input type="submit" value="Save" class="btn btn-success">
            </div>

          </form>
          
        </div>
      </div>
    </div>
    
  </div>
  
</div>
</div>

@endsection
