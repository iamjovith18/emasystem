@extends('layouts.app')

@section('content')


/* Edit Access */

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('access')}}">View Access List</a></div>
    <h1>Update Access Information</h1>
  </div>
  <div class="container-fluid"><hr>
    @include('admin.includes.errors')
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Access Information</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="POST" action="{{route('access.update',['id'=>$access->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}         
              <div class="control-group">
                <label class="control-label">Status Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="access_name" value="{{$access->access_name }}" id="required">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Update" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
