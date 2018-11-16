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
                        <th>Accessory Name</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
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
                  
                          @foreach($cat->component as $component)
                              <tr>
                                  <td>{{strtoupper($component->component_name)}}</td>
                                  <td>{{strtoupper($component->category->category_name)}}</td>
                                  <td>{{strtoupper($component->brand->brand)}}</td>
                                  <td>{{strtoupper($component->model_no)}}</td>
                                  <td>{{strtoupper($component->serial_no)}}</td>
                                  <td>{{strtoupper($component->batch_no)}}</td>
                                  <td>{{$component->total}}</td>
                                  <td>{{$component->total - $component->order_qty}}</td>                  
                                  <td>{{date('d-m-Y',strtotime($component->created_at))}}</td>
                                  <td>
                                    @if($component->total - $component->order_qty <= 0 )
                                    <a title="No Available" class="btn btn-danger" disabled><i class="icon-shopping-cart"></i></a>
                                    @else
                                    <a title="Checkout" href="{{route('component.checkout',['id'=>$component->id])}}" class="btn btn-primary"><i class="icon-shopping-cart"></i></a>
                                    @endif
                                    <a title="Edit" href="{{route('component.edit',['id'=>$component->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a> 
                                    <a title="Delete" href="{{route('component.delete',['id'=>$component->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" ><i class="icon-trash"></i></a>
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
