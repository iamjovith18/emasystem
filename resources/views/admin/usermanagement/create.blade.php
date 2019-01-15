@extends('layouts.app')

@section('content')
/* Create New Employee */

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement')}}" class="tip-bottom">View Employee List</a></div>
  <h1>Add New Employee</h1>
</div>
<div class="container-fluid">
  <hr>
  @include('admin.includes.errors')
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Employee Personal-Info</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="{{route('usermanagement.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            {{csrf_field()}}
            <div class="control-group">
                <label class="control-label">First Name</label>
                <div class="controls">
                  <input type="text" autofocus class="span6" name="firstname" value="{{ old('firstname') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Last Name</label>
                <div class="controls">
                  <input type="text" class="span6" name="lastname" value="{{ old('lastname') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Job Title</label>
                <div class="controls">
                  <input type="text" class="span6" name="job_title" value="{{ old('job_title') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email Address/PC Login</label>
                <div class="controls">
                  <input type="email" class="span4" name="email_add" value="{{ old('email_add') }}"  id="required">
                  <select name="domain_name" id="required">
                    <option selected disabled>Select</option>
                    <option value="@crazydomains.com">@crazydomains.com</option>
                    <option value="@dreamscapenetworks.com">@dreamscapenetworks.com</option>
                    <option value="@vodien.com">@vodien.com</option>
                  </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email Password</label>
                <div class="controls">
                  <input type="text" class="span6" name="user_password" value="{{ old('user_password') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">CRMS Username</label>
                <div class="controls">
                  <input type="text" class="span6" name="username" value="{{ old('username') }}"  id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">CRMS Password</label>
                <div class="controls">
                  <input type="text" class="span6" name="crms_password" value="{{ old('crms_password') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Department</label>
                <div class="controls">
                  <select name="department" required >
                    <option selected disabled>Select</option>
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
                  <input type="text" class="span6" name="batch" value="{{ old('batch') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Extension #</label>
                <div class="controls">
                  <input type="text" class="span6" name="extension_no" value="{{ old('extension_no') }}" id="required">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Employee Access</label>
                <div class="controls">
                @foreach($access as $a)
                {{ucfirst($a->access_name)}}<input type="checkbox" class="span1" value="{{$a->id}}" name="access[]" />
                @endforeach
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <select name="status" >
                    <option value="active">Active</option>
                    <option value="suspended">Suspended</option>
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
  
</div></div>

@endsection
