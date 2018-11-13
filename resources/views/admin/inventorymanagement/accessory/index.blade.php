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
                <li @if($count == 0) class="active" @endif ><a data-toggle="tab" href="#tab-{{$cat->id}}">{{$cat->category_name}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="widget-content tab-content">
              @foreach($categories as $count => $cat)
              <div @if($count==0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{$cat->id}}">
                @foreach($accessories->$cat() as $accessory)
                  {{$accesory->}}

                @endforeach
              </div>
              @endforeach
            </div>
              
       </div>
    
  </div>
</div>

@endsection
