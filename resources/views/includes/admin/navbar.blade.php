<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{url('backend/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{route('dashboard')}}"><img src="{{url('backend/images/logo2.png')}}" alt="Logo"></a>
            {{-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> --}}
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">


            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{url('backend/images/admin.jpg')}}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa-user"></i>Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn nav-link" style="background-color: white"><i class="fa fa-power-off"></i>Logout</button>
                        </form>

                    </li>

                </div>
            </div>

        </div>
    </div>
</header>
