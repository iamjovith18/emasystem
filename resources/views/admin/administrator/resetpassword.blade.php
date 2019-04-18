@extends('layouts.app')

@section('content')
/* Create New Administrator */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('administrator')}}" class="tip-bottom">View All Administrator</a></div>
  <h1>Change Password</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Password</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('administrator.updatepassword')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="name" value="{{Auth::user()->name}}" id="required" disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Current Password</label>
                <div class="controls">
                  <input type="email" class="span6" name="current_password"  id="required" autofocus>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">New Password</label>
                <div class="controls">
                  <input type="password" class="span6" name="new_password" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Confirm Password</label>
                <div class="controls">
                  <input type="password" class="span6" name="confirm_password" id="password-confirm">
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
