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
            <table class="table table-bordered data-table" id="accessory">
              <thead>
                <tr>
                  <th>Brand Name</th>
                  <th>Category Name</th>
                  <th>Model Name</th>
                  <th>Serial No.</th>
                  <th>Batch No.</th>
                  <th>Total</th>
                  <th>Available</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
             
                    @foreach($cat->accessory as $accessory)
                        <tr>
                            <td>{{strtoupper($accessory->brand->brand)}}</td>
                            <td>{{strtoupper($accessory->category->category_name)}}</td>
                            <td>{{strtoupper($accessory->model_no)}}</td>
                            <td>{{strtoupper($accessory->serial_no)}}</td>
                            <td>{{strtoupper($accessory->batch_no)}}</td>
                            <td>{{$accessory->quantity}}</td>
                            <td>{{$accessory->quantity - $accessory->order_qty}}</td>                 
                            <td>{{date('d-m-Y',strtotime($accessory->created_at))}}</td>
                            <td>
                              @if($accessory->quantity - $accessory->order_qty <= 0 )
                              <a title="No Available" class="btn btn-danger" disabled><i class="icon-shopping-cart"></i></a>
                              @else
                              <a title="Checkout" href="{{route('accessory.checkout',['id'=>$accessory->id])}}" class="btn btn-primary"><i class="icon-shopping-cart"></i></a>
                              @endif
                              <a title="Edit" href="{{route('accessory.edit',['id'=>$accessory->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a> 
                              <a title="Delete" href="{{route('accessory.delete',['id'=>$accessory->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" ><i class="icon-trash"></i></a>
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
