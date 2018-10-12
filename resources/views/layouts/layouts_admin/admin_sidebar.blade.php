<!--sidebar-menu-->
<div id="sidebar"><a href="{{route('home')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{route('home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Employee Management</span></a>
      <ul>
        <li><a href="{{route('usermanagement')}}">View All Employee</a></li>
        <li><a href="{{route('usermanagement.create')}}">Add New Employee</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Asset Management</span></a>
      <ul>
        <li><a href="index2.html">List</a></li>
        <li><a href="gallery.html">All Deployed</a></li>
        <li><a href="{{route('accessory')}}">Accessories</a></li>
        <li><a href="{{route('component')}}">Components</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Settings</span></a>
      <ul>
        <li><a href="invoice.html">Asset Models</a></li>
        <li><a href="{{route('brand')}}">Brands</a></li>
        <li><a href="{{route('category')}}">Categories</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->