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
            <div class="widget-title">
              <ul class="nav nav-tabs">
                @foreach($categories as $count => $cat)
                <li @if($count == 0) class="active" @endif ><a data-toggle="tab" href="#tab-{{$cat->id}}">{{strtoupper($cat->category_name)}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="widget-content tab-content">
              @foreach($categories as $count => $cat)
              <div @if($count==0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{$cat->id}}">
              <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                  <h5>List of {{strtoupper($cat->category_name)}}</h5>
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
                    @foreach($cat->system_unit as $su)
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
                              <a title="No Available" class="btn btn-danger" disabled><i class="icon-shopping-cart"></i></a>
                              @else
                              <a title="Checkout" href="{{route('system-unit.checkout',['id'=>$su->id])}}" class="btn btn-primary btn-sm"><i class="icon-shopping-cart"></i></a>
                              @endif
                              <a title="Edit" href="{{route('system-unit.edit',['id'=>$su->id])}}" class="btn btn-warning btn-sm"><i class="icon-edit"></i></a>
                              <a title="Delete" href="{{route('system-unit.delete',['id'=>$su->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" ><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tr>      
              </tbody>
            </table>
            </div>
            </div>
            </div>
            @endforeach
            </div>
            </div>
            </div>
            </div>

@endsection
