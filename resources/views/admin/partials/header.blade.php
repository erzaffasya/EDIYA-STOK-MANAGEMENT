<div class="header">

    <!-- Logo -->
     <div class="header-left active" >
        <a href="/admin/hero" class="logo logo-normal">
            <img src="{{asset('tlandingpage/assets/img/logo.jpeg')}}"  alt="logo" >
        </a>
        <a href="/admin/hero" class="logo logo-white">
            <img src="{{asset('tlandingpage/assets/img/logo.jpeg')}}"  alt="logo" >
        </a>
        <a href="/admin/hero" class="logo-small">
            <img src="{{asset('tlandingpage/assets/img/logo.jpeg')}}"  alt="logo" >
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
        </a>
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Menu -->
    <ul class="nav user-menu">



        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{asset('tadmin/assets/img/profiles/avator1.jpg')}}" alt="">
                <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <a href="{{ route('logout') }}" class="dropdown-item logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><span><i class="fa fa-sign-out"></i></span>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </div>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->
</div>
