<!--Header-part-->
<div id="header">
  <h1><a href="/">Dreamscape</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">{{auth()->user()->name}}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{route('administrator.resetpassword')}}"><i class="icon-user"></i> Change Password</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{ route('logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->