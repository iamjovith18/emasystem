
@extends('layouts.app')

@section('content')


/* View  Employee Assets */


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement')}}" class="tip-bottom">View Employee List</a></div>
    <h1>{{$user->fname.' '. $user->lname}}</h1>
  </div>
  <div class="container-fluid"><hr>
  <div class="widget-box">
        <div class="widget-title">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab3">Accessories</a></li>
                <li><a data-toggle="tab" href="#tab1">Components</a></li>
                <li><a data-toggle="tab" href="#tab4">Units</a></li>
            </ul>
        </div>
        <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane">
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                    <tbody>
                            <thead>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>Model Name</th>
                                    <th>Serial No.</th>
                                    <th>Category Name</th>
                                    <th>Date Issued</th>
                                </tr>
                            </thead>
                                <tr>
                                @if($component_users!=null)
                                    @foreach($component_users as $cu)
                                        <tr>
                                            <td> {{$cu->component->brand->brand}} </td>
                                            <td> {{$cu->component->component_name}} </td>
                                            <td> {{$cu->component->serial_no}} </td>
                                            <td> {{$cu->component->category->category_name}} </td>
                                            <td>{{date('F j,Y',strtotime($cu->created_at))}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>         
                    </tbody>
                    </table>
                </div>
            </div>


            <div id="tab3" class="tab-pane active">
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                    <tbody>
                            <thead>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>Accessory Name</th>
                                    <th>Model No.</th>
                                    <th>Serial No.</th>
                                    <th>Batch No.</th>
                                    <th>Category Name</th>
                                    <th>Date Issued</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tr>
                                @if($accessory_users!=null)
                                    @foreach($accessory_users as $au)
                                        <tr>
                                            <td> {{$au->accessory->brand->brand}} </td>
                                            <td> {{$au->accessory->accessory_name}} </td>
                                            <td> {{$au->accessory->model_no}} </td>
                                            <td> {{$au->accessory->serial_no}} </td>
                                            <td> {{$au->accessory->batch_no}} </td>
                                            <td> {{$au->accessory->category->category_name}} </td>
                                            <td>{{date('F j,Y',strtotime($au->created_at))}}</td>
                                            <td>Remarks</td>
                                            <td><a title="Return" href="{{route('accessory.edit',['id'=>$au->id])}}" class="btn btn-warning"><i class="icon-undo"></i></a></td>
                                        </tr>
                                    @endforeach
                                @else{
                                        <tr>
                                            <td>No data found!</td>
                                        </tr>
                                }
                                @endif
                                <tr>         
                    </tbody>
                    </table>
                </div>
            </div>
            <div id="tab4" class="tab-pane">
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                    <tbody>
                            <thead>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>Model Name</th>
                                    <th>Serial No.</th>
                                    <th>Asset Tag</th>
                                    <th>Category</th>
                                    <th>Date Issued</th>
                                </tr>
                            </thead>
                                <tr>
                                @if($system_users!=null)
                                    @foreach($system_users as $su)
                                        <tr>
                                            <td> {{$su->system_unit->brand->brand}} </td>
                                            <td> {{$su->system_unit->model}} </td>
                                            <td> {{$su->system_unit->serial_no}}</td>
                                            <td> {{$su->system_unit->asset_tag}}</td>
                                            <td> {{$su->system_unit->category->category_name}}</td>
                                            <td>{{date('F j,Y',strtotime($su->created_at))}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>         
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
