@extends('layouts.app')

@section('content')


/* View All Category*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('category.create')}}" class="tip-bottom">Add New Category</a></div>
    <h1>View All Category</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('category.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Category</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Category Name</th>
                  <th>Type</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($categories)>0)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->type}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>
                            <a title="Edit" href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                            <a title="Delete" href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure do you want to delete this category?')" ><i class="icon-edit"></i></a>

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
