@extends('layouts.app')

@section('content')


/* View All Employee */

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement.create')}}" class="tip-bottom">Add New Employee</a></div>
    <h1>View All Employees</h1>
  </div>
  <div class="container-fluid"><hr>
  <div class="widget-box" style="overflow-x:auto;">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Employee Access</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                        @foreach($access as $a)
                        <th>{{$a->access_name}}</th>
                        @endforeach
                </tr>
              </thead>
              <tbody>
                <tr>
                        @foreach($access_user as $access_u)   
                    
                         <td>   {{$access_u->users->lname}} </td>
                        @endforeach                   
                    
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
        </div>
</div>

@endsection
