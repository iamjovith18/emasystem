@extends('layouts.app')

@section('content')


/* View All Brands*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('brand.create')}}" class="tip-bottom">Add New Brand</a></div>
    <h1>View All Brands</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('brand.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Employees</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Brand Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($brands)>0)
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->brand}}</td>
                            <td>{{$brand->created_at}}</td>
                            <td>
                            <a title="Edit" href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                            <a title="Delete" href="{{route('brand.delete',['id'=>$brand->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure do you want to delete this user?')" ><i class="icon-trash"></i></a>

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
