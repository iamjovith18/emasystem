@extends('layouts.app')

@section('content')


/* View All Administrator*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('administrator.create')}}" class="tip-bottom">Add New Administrator</a></div>
    <h1>View all Users</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('administrator.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created Date</th>
                  <th>Permission</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($users)>0)
                    @foreach($users as $u)
                        <tr>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->created_at}}</td>
                            <td>admin</td>
                            <td>
                            <a href="{{route('administrator.edit',['id'=>$u->id])}}" class="btn-btn-warning">Edit</a> |
                            <a href="{{route('administrator.delete',['id'=>$u->id])}}" class="btn-btn-warning" onclick="return confirm('Are you sure do you want to delete this category?')" >Delete</a>

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
