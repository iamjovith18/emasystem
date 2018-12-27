@extends('layouts.app')

@section('content')


/* View All Status*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('status.create')}}" class="tip-bottom">Add New Status</a></div>
    <h1>View All Status</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('status.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Status</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Status Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>  
                    @foreach($status as $s)
                        <tr>
                            <td>{{ucfirst($s->status_name)}}</td>
                            <td>{{date('F j,Y',strtotime($s->created_at))}}</td>
                            <td>
                            <a title="Edit" href="{{route('status.edit',['id'=>$s->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                            <a title="Delete" href="{{route('status.delete',['id'=>$s->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure do you want to delete this user?')" ><i class="icon-trash"></i></a>

                            </td>
                        </tr>
                    @endforeach
                </tr>      
              </tbody>
            </table>
          </div>
        </div>
        </div>
</div>

@endsection
