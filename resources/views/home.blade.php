@extends('layouts.app')
@section('content')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
 <!--  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

      </ul>
    </div> -->
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <ul class="site-stats">
                <a href="{{route('usermanagement')}}"><li class="bg_lb"><i class="icon-user"></i> <strong>{{$total_users}}</strong> <strong><h5>Total Users</h5></strong></li></a>
                <!-- total headsets -->
                @if($total_headsets > 15)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class="icon-headphones"></i> <strong>{{$total_headsets}}</strong> <strong><h5>Total Headsets</h5></li>
                @else
                <li class="bg_lr"><i class="icon-headphones"></i><strong>{{$total_headsets}}</strong> <strong><h5>Total Headsets<span class="label label-warning">"are running out of stock!"</span></h5></li> </a>
                @endif
                <!-- end total headsets -->

                <!-- total hdd -->
                @if($total_hdd > 10)
                <a href="{{route('component')}}"><li class="bg_lb"><i class="icon-hdd"></i> <strong>{{$total_hdd}}</strong> <strong><h5>Total Harddisks<h5></strong></li>
                @else
                <li class="bg_lr"><i class="icon-hdd"></i> <strong>{{$total_hdd}}</strong> <strong><h5>Total Harddisks<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                <!-- end total hdd -->
                
                @endif
                @if($total_kb > 10)
                <li class="bg_lb"><i class=" icon-desktop"></i> <strong>{{$total_kb}}</strong> <strong><h5>Total Keyboards</h5></strong></li>
                @else
                <li class="bg_lr"><i class="icon-desktop"></i> <strong>{{$total_kb}}</strong> <strong><span class="label label-warning">"are running out of stock!"</span><h5>Total Keyboards</h5></strong></li>
                @endif
                @if($total_m > 10)
                <li class="bg_lb"><i class="icon-hand-up"></i> <strong>{{$total_m}}</strong> <strong><h5>Total Mouse</h5></strong></li>
                @else
                <li class="bg_lr"><i class="icon-hand-up"></i> <strong>{{$total_m}}</strong> <strong><h5>Total Mouse<span class="label label-warning">"are running out of stock!"</span></h5></strong></li>
                @endif
                @if($total_monitor > 10)
                <li class="bg_lb"><i class=" icon-desktop"></i> <strong>{{$total_monitor}}</strong> <strong><h5>Total Monitors</h5></strong></li>
                @else
                <li class="bg_lr"><i class="icon-desktop"></i> <strong>{{$total_monitor}}</strong> <strong><h5>Total Monitors <span class="label label-warning">"are running out of stock!"</span></h5></strong></li>
                @endif
                @if($total_cpu > 10)
                <li class="bg_lb"><i class=" icon-hdd"></i> <strong>{{$total_cpu}}</strong> <strong><h5>Total System Units</h5></strong></li>
                @else
                <li class="bg_lr"><i class="icon-hdd"></i> <strong>{{$total_cpu}}</strong> <strong><h5>Total System Units <span class="label label-warning">"are running out of stock!"</span></h5></strong></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
  </div>
</div>

<!--end-main-container-part-->

@endsection