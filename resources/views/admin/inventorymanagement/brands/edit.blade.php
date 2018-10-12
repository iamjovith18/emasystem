@extends('layouts.app')

@section('content')


/* Edit employee information */

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement')}}">View Employee List</a></div>
    <h1>Update Employee Information</h1>
  </div>
  <div class="container-fluid"><hr>
    @include('admin.includes.errors')
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Employee Information</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{route('brand.update',['id'=>$brand->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
              {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">First Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="brand" value="{{$brand->brand }}" id="required">
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
