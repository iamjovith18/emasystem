@extends('layouts.app')

@section('content')


/* View All Computer Station Name*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('station.create')}}" class="tip-bottom">Add New Station</a></div>
    <h1>View All Station</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('station.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Computer Station Name</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Computer Station Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>         
                    @foreach($stations as $station)
                        <tr>
                            <td>{{$station->station_name}}</td>
                            <td>{{$station->created_at}}</td>
                            <td>
                            <a title="Edit" href="{{route('station.edit',['id'=>$station->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                            <a title="Delete" href="{{route('station.delete',['id'=>$station->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure do you want to delete this user?')" ><i class="icon-trash"></i></a>

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
