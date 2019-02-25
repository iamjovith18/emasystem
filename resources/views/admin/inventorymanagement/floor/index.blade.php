@extends('layouts.app')

@section('content')


/* View All Floor Name*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('floor.create')}}" class="tip-bottom">Add New Floor</a></div>
    <h1>View All Floor</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('floor.create')}}" class="btn btn-primary ">Create Floor Name</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Floor Name</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Floor Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>         
                    @foreach($floors as $floor)
                        <tr>
                            <td>{{strtoupper($floor->floor_name)}}</td>
                            <td>{{$floor->created_at}}</td>
                            <td>
                            <a title="Edit" href="{{route('floor.edit',['id'=>$floor->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                            <a title="Delete" href="{{route('floor.delete',['id'=>$floor->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure do you want to delete this user?')" ><i class="icon-trash"></i></a>

                            </td>
                        </tr>
                    @endforeach           
              </tbody>
            </table>
          </div>
        </div>
        </div>
</div>

@endsection
