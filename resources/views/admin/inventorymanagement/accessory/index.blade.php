@extends('layouts.app')

@section('content')


/* View All Brands*/

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('accessory.create')}}" class="tip-bottom">Add New Accessory</a></div>
    <h1>View All Accessories</h1>
  </div>
  <div class="container-fluid"><hr>
  <a href="{{route('accessory.create')}}" class="btn btn-primary ">Create</a>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List of Accessory</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Accessory Name</th>
                  <th>Category Name</th>
                  <th>Brand Name</th>
                  <th>Model Name</th>
                  <th>Serial No.</th>
                  <th>Quantity</th>
                  <th>Min Qty</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($accessories)>0)
                    @foreach($accessories as $accessory)
                        <tr>
                            <td>{{strtoupper($accessory->accessory_name)}}</td>
                            <td>{{strtoupper($accessory->category->category_name)}}</td>
                            <td>{{strtoupper($accessory->brand->brand)}}</td>
                            <td>{{strtoupper($accessory->model_no)}}</td>
                            <td>{{strtoupper($accessory->serial_no)}}</td>
                            <td>{{$accessory->quantity}}</td>
                            <td>{{$accessory->min_qty}}</td>                 
                            <td>{{date('d-m-Y',strtotime($accessory->created_at))}}</td>
                            <td>
                              <a href="{{route('accessory.edit',['id'=>$accessory->id])}}" class="btn-btn-warning">Edit</a> |
                              <a href="{{route('accessory.delete',['id'=>$accessory->id])}}" class="btn-btn-warning" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" >Delete</a>
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
