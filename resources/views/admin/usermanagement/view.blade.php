@extends('layouts.app')

@section('content')


/* View All Employee */

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement.create')}}" class="tip-bottom">Add New Employee</a></div>
    <h1>View All Employees</h1>
  </div>
  <div class="container-fluid"><hr>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Employees</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Fullname</th>
                  <th>Job Title</th>
                  <th>Email Address</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Department</th>
                  <th>Batch</th>
                  <th>Extension #</th>
                  <th>Status</th>
                  <th>Date Created</th>              
                  <th>Action</th>              
                </tr>
              </thead>
              <tbody>
              @if(count($usercredentials)>0)
                    @foreach($usercredentials as $usercredential)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$usercredential->lname.', '.$usercredential->fname}}</td>
                            <td>{{$usercredential->job_title}}</td>
                            <td>{{$usercredential->email_add}}</td>
                            <td>{{$usercredential->username}}</td>
                            <td>{{$usercredential->password}}</td>
                            <td>{{$usercredential->department}}</td>
                            <td>{{$usercredential->batch}}</td>
                            <td>{{$usercredential->extension_no}}</td>
                            <td>{{$usercredential->status}}</td>
                            <td>{{$usercredential->created_at}}</td>
                            <td>
                              <a href="{{route('usermanagement.show',['id'=>$usercredential->id])}}" class="btn-btn-warning">View</a> |
                              <a href="{{route('usermanagement.edit',['id'=>$usercredential->id])}}" class="btn-btn-warning">Edit</a> |
                              <a href="{{route('usermanagement.delete',['id'=>$usercredential->id])}}" class="btn-btn-warning" onclick="return confirm('Are you sure do you want to delete this user?')" >Delete</a>

                            </td>
                        </tr>
                    @endforeach
                @else
                        <tr>
                            <td class="text-center" colspan="12">No data found!!!</td>   
                        </tr>
                @endif
                </tr>      
              </tbody>
            </table>
          </div>
        </div>
        </div>
</div>

@endsection
