@extends('layouts.app')

@section('content')


/* View Employee Resigned/Awol access */

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement.create')}}" class="tip-bottom">Add New Employee</a></div>
    <h1>View Resigned/Awol Employee Access</h1>
  </div>
  <div class="container-fluid"><hr>
  <div class="widget-box" style="overflow-x:auto;">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Employees</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Fullname</th>  
                  <th>Email Address</th>
                  <th>Username</th>          
                  <th>Status</th>
                  @foreach($access as $a)              
                  <th>{{ucfirst($a->access_name)}}</th>
                  @endforeach              
                  <th>Action</th>              
                </tr>
              </thead>
              <tbody>
                    @foreach($usercredentials as $usercredential)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$usercredential->lname.', '.$usercredential->fname}}</td>                       
                            <td>{{$usercredential->email_add}}</td>
                            <td>{{$usercredential->username}}</td>
                            <td>{{$usercredential->status}}</td>
            
                            <form class="form-horizontal" method="post" action="{{route('usermanagement.update_employee_access',['id'=>$usercredential->id])}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            {{csrf_field()}}
                            @foreach($access as $a)
                            <td>
                                <input onclick="return false;" type="checkbox" class="span1"value="{{$a->id}}" name="access[]" 
                                @foreach($usercredential->access as $access_u)
                                    @if($a->id == $access_u->id) 
                                        checked 
                                    @endif 
                                @endforeach 
                                >
                            </td>
                            @endforeach
                            <td>
                              <a title="Edit" href="{{route('usermanagement.edit_employee_access',['id'=>$usercredential->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                            </td>
                            </form>
                        </tr>
                    @endforeach 
              </tbody>
            </table>
          </div>
        </div>
        </div>
</div>

@endsection
