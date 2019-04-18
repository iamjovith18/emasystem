 
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Employee Management & Assets System Dashboard Welcome</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <ul class="site-stats">
                <a href="{{route('usermanagement')}}"><li class="bg_lb"><i class="icon-user"></i> <strong>{{$total_users}}</strong> <strong><h5>Total Users</h5></strong></li></a>
                
                <!-- total headsets -->
                @if($total_headsets >= 15)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class="icon-headphones"></i> <strong>{{$total_headsets}}</strong> <strong><h5>Total Headsets</h5></li></a>
                @else
                <a href="{{route('accessory')}}"><li class="bg_lr"><i class="icon-headphones"></i><strong>{{$total_headsets}}</strong> <strong><h5>Total Headsets<span class="label label-warning">"are running out of stock!"</span></h5></li> </a>
                @endif
                <!-- end total headsets -->

                <!-- total hdd -->
                @if($total_hdd >= 10)
                <a href="{{route('component')}}"><li class="bg_lb"><i class="icon-hdd"></i> <strong>{{$total_hdd}}</strong> <strong><h5>Total Harddisks<h5></strong></li></a>
                @else
                <a href="{{route('component')}}"><li class="bg_lr"><i class="icon-hdd"></i> <strong>{{$total_hdd}}</strong> <strong><h5>Total Harddisks<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>       
                @endif
				<!-- end total hdd -->
				
				<!-- total ssd -->
                @if($total_ssd >= 10)
                <a href="{{route('component')}}"><li class="bg_lb"><i class="icon-hdd"></i> <strong>{{$total_ssd}}</strong> <strong><h5>Total SSD<h5></strong></li></a>
                @else
                <a href="{{route('component')}}"><li class="bg_lr"><i class="icon-hdd"></i> <strong>{{$total_ssd}}</strong> <strong><h5>Total SSD<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>       
                @endif
				<!-- end total ssd -->
                
				@if($total_kb >= 10)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class=" icon-desktop"></i> <strong>{{$total_kb}}</strong> <strong><h5>Total Keyboards</h5></strong></li></a>
                @else
                <a href="{{route('accessory')}}"><li class="bg_lr"><i class="icon-desktop"></i> <strong>{{$total_kb}}</strong> <strong><h5>Total Keyboards<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
                <!--total Mouse -->
				@if($total_m >=10)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class="icon-hand-up"></i> <strong>{{$total_m}}</strong> <strong><h5>Total Mouse</h5></strong></li>
                @else
                <a href="{{route('accessory')}}"><li class="bg_lr"><i class="icon-hand-up"></i> <strong>{{$total_m}}</strong> <strong><h5>Total Mouse<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
				<!-- end total mouse -->
				
				<!--total Mouse/Keyboard wireless -->
				@if($total_mk >= 10)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class="icon-hand-up"></i> <strong>{{$total_mk}}</strong> <strong><h5>Total Wireless Mouse/Keyboard</h5></strong></li>
                @else
                <a href="{{route('accessory')}}"><li class="bg_lr"><i class="icon-hand-up"></i> <strong>{{$total_mk}}</strong> <strong><h5>Total Wireless Mouse/Keyboard<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
				<!-- end total mouse/keyboard wireless -->
				
				<!--total VGA Cable -->
				@if($total_vga >= 10)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class="icon-wrench"></i> <strong>{{$total_vga}}</strong> <strong><h5>Total VGA Cable</h5></strong></li>
                @else
                <a href="{{route('accessory')}}"><li class="bg_lr"><i class="icon-wrench"></i> <strong>{{$total_vga}}</strong> <strong><h5>Total VGA Cable<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
				<!-- end total VGA Cable -->
				
				<!--total HDMI Cable -->
				@if($total_hdmi >= 10)
                <a href="{{route('accessory')}}"><li class="bg_lb"><i class="icon-wrench"></i> <strong>{{$total_hdmi}}</strong> <strong><h5>Total HDMI Cable</h5></strong></li>
                @else
                <a href="{{route('accessory')}}"><li class="bg_lr"><i class="icon-wrench"></i> <strong>{{$total_hdmi}}</strong> <strong><h5>Total HDMI Cable<span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
				<!-- end total HDMI Cable -->
				
                <!-- total monitor -->
                @if($total_monitor >= 10)
                <a href="{{route('system-unit')}}"><li class="bg_lb"><i class=" icon-desktop"></i> <strong>{{$total_monitor}}</strong> <strong><h5>Total Monitors</h5></strong></li></a>
                @else
                <a href="{{route('system-unit')}}"><li class="bg_lr"><i class="icon-desktop"></i> <strong>{{$total_monitor}}</strong> <strong><h5>Total Monitors <span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
                <!-- end total monitor -->

                <!-- total cpu -->
                @if($total_cpu > 10)
                <a href="{{route('system-unit')}}"><li class="bg_lb"><i class=" icon-hdd"></i> <strong>{{$total_cpu}}</strong> <strong><h5>Total System Units</h5></strong></li></a>
                @else
                <a href="{{route('system-unit')}}"><li class="bg_lr"><i class="icon-hdd"></i> <strong>{{$total_cpu}}</strong> <strong><h5>Total System Units <span class="label label-warning">"are running out of stock!"</span></h5></strong></li></a>
                @endif
                <!-- end total cpu -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box-->

