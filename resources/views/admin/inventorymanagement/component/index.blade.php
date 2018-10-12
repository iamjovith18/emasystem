@extends('layouts.app')

@section('content')


/* View All Components*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('component.create')}}" class="tip-bottom">Add New Component</a></div>
    <h1>View All Components</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('component.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Components</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Category Name</th>
                  <th>Brand Name</th>
                  <th>Serial No.</th>
                  <th>Total</th>
                  <th>Available</th>
                  <th>Created Date</th>
                  <th>Updated Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($components)>0)
                    @foreach($components as $component)
                        <tr>
                            <td>{{strtoupper($component->component_name)}}</td>
                            <td>{{strtoupper($component->category->category_name)}}</td>
                            <td>{{strtoupper($component->brand->brand)}}</td>
                            <td>{{strtoupper($component->serial_no)}}</td>
                            <td>{{$component->total}}</td>             
                            <td>{{$component->total - $component->order_qty}}</td>             
                            <td>{{$component->created_at}}</td>
                            <td>{{$component->updated_at}}</td>
                            <td>
                              @if($component->total - $component->order_qty < 1)
                              <a>No Available |</a>
                              @else
                              <a href="{{route('component.checkout',['id'=>$component->id])}}" class="btn-btn-warning">Checkout |</a>
                              @endif
                              <a href="{{route('component.edit',['id'=>$component->id])}}" class="btn-btn-warning">Edit</a> |
                              <a href="{{route('component.delete',['id'=>$component->id])}}" class="btn-btn-warning" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" >Delete</a>
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
