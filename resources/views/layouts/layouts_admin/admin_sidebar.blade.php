<!--sidebar-menu-->
<div id="sidebar"><a href="{{route('home')}}" class="visible-phone"><i class="icon icon-dashboard"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{route('home')}}"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-user"></i> <span>Employee Management</span></a>
      <ul>
        <li><a href="{{route('usermanagement')}}">View All Employee</a></li>
        <li><a href="{{route('usermanagement.employee-access')}}">View All Employee Access</a></li>
        <li><a href="{{route('usermanagement.create')}}">Add New Employee</a></li>
      </ul>
    </li>
    <li class=""><a href="{{route('floor-station')}}"><i class="icon icon-home"></i> <span>Floor & Station</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-desktop"></i> <span>Asset Management</span></a>
      <ul>
        <li><a href="{{route('all-deployed-assets')}}">All Deployed List</a></li>
        <li><a href="{{route('accessory')}}">Accessories</a></li>
        <li><a href="{{route('component')}}">Components</a></li>
        <li><a href="{{route('system-unit')}}">System Units</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-wrench"></i> <span>Settings</span></a>
      <ul>
        <li><a href="{{route('administrator')}}">Administrator</a></li>
        <li><a href="{{route('brand')}}">Brands</a></li>
        <li><a href="{{route('category')}}">Categories</a></li>
        <li><a href="{{route('station')}}">Computer Station</a></li>
        <li><a href="{{route('access')}}">Employee Access</a></li>
        <li><a href="{{route('floor')}}">Floor Name</a></li>
        <li><a href="{{route('status')}}">Status</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->