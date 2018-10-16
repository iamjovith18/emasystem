@extends('layouts.app')

@section('content')


/* View All Components*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('system-unit.create')}}" class="tip-bottom">Add New Unit</a></div>
    <h1>View All Units</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('system-unit.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Units</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Brand Name</th>
                  <th>Category Name</th>
                  <th>Model Name</th>
                  <th>Asset Tag</th>
                  <th>Serial No.</th>
                  <th>Total</th>
                  <th>Available</th>
                  <th>Created Date</th>
                  <th>Updated Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($system_units)>0)
                    @foreach($system_units as $su)
                        <tr>
                            <td>{{strtoupper($su->brand->brand)}}</td>
                            <td>{{strtoupper($su->category->category_name)}}</td>
                            <td>{{strtoupper($su->model)}}</td>
                            <td>{{strtoupper($su->asset_tag)}}</td>
                            <td>{{strtoupper($su->serial_no)}}</td>
                            <td>{{$su->total}}</td>             
                            <td>{{$su->total - $su->order_qty}}</td>             
                            <td>{{$su->created_at}}</td>
                            <td>{{$su->updated_at}}</td>
                            <td>
                              @if($su->total - $su->order_qty < 1)
                              <a>No Available |</a>
                              @else
                              <a href="{{route('system-unit.checkout',['id'=>$su->id])}}" class="btn-btn-warning">Checkout |</a>
                              @endif
                              <a href="{{route('system-unit.edit',['id'=>$su->id])}}" class="btn-btn-warning">Edit</a> |
                              <a href="{{route('system-unit.delete',['id'=>$su->id])}}" class="btn-btn-warning" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" >Delete</a>
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
