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
            <form class="form-horizontal" method="post" action="{{route('usermanagement.update_employee_access',['id'=>$usercredential->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
              {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">First Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="firstname" value="{{$usercredential->fname }}" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Last Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="lastname" value="{{$usercredential->lname }}" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Job Title</label>
                <div class="controls">
                  <input type="text" class="span6" name="job_title" value="{{$usercredential->job_title }}" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email Address</label>
                <div class="controls">
                  <input type="email" class="span6" name="email_add" value="{{$usercredential->email_add }}"  id="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                  <input type="text" class="span6" name="username" value="{{$usercredential->username }}"  id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="text" class="span6" name="user_password" value="{{$usercredential->password }}" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Department</label>
                <div class="controls">
                  <select name="department" required >
                    <option value="{{$usercredential->department }}">{{$usercredential->department }}</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Business Development">Business Development</option>
                    <option value="Corporate Support">Corporate Support</option>
                    <option value= "Customer Care">Customer Care</option>
                    <option value="Customer Experience">Customer Experience</option>
                    <option value="Designer">Designer</option>
                    <option value="Developer">Developer</option>
                    <option value="Domain Group">Domain Group</option>
                    <option value="Finance">Finance</option>
                    <option value="HR">HR</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Quality Assurance">Quality Assurance</option>
                    <option value="Reseller">Reseller</option>
                    <option value="Sales">Sales</option>
                    <option value="Support">Support</option>
                    <option value="Support Team">Support Team</option>
                    <option value="System Admins">System Admins</option>
                    <option value="Project Management">Project Management</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Batch</label>
                <div class="controls">
                  <input type="text" class="span6" name="batch" value="{{$usercredential->batch }}" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Extension #</label>
                <div class="controls">
                  <input type="text" class="span6" name="extension_no" value="{{$usercredential->extension_no}}" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Employee Access</label>
                <div class="controls">
                  @foreach($access as $a)
                  {{ucfirst($a->access_name)}}<input type="checkbox" class="span1" value="{{$a->id}}" name="access[]" 
                    @foreach($usercredential->access as $access_u)
                      @if($a->id == $access_u->id) 
                        checked 
                      @endif 
                    @endforeach 
                  >
                  @endforeach
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <select name="status" >
                    <option value="{{$usercredential->status }}">{{$usercredential->status }}</option>
                    <option value="Active">Active</option>
                    <option value="Suspended">Suspended</option>
                  </select>
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
