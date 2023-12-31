<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ url('frontend/logo/logo.png') }}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                            <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="{{ request()->is('product-mebel') ? 'active-menu' : '' }}">
                            <a href="{{ route('product-front') }}">Belanja</a>
                        </li>
                        <li>
                            <a href="#">Tentang</a>
                        </li>

                        <li>
                            <a href="#">Kontak</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <a href="{{ route('cart.list') }}">
                        @auth
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                                data-notify="{{ $cartCount }}">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        @endauth
                        @guest
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        @endguest
                    </a>
                    {{-- <a href="#"
                        class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                        data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a> --}}

                    @guest
                        <li class="nav-item px-3 px-xl-4">
                            <button class="btn btn-outline-dark order-1 order-lg-0 fw-medium" role="button" type="button"
                                onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
                        </li>
                    @endguest
                    @auth

                        <ul class="main-menu">
                            <li>
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <img class="user-avatar rounded-circle img-thumbnail"
                                        src="https://ui-avatars.com/api/?name={{ $user->name }}" alt="User Avatar">
                                </a>
                                <ul class="sub-menu" style="margin-left: -60px; margin-top: -10px">
                                    <li>
                                        <a class="nav-link" href="{{ route('user-trans.index') }}"><i></i>Transaksi</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><i></i>Profil</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button style="background-color: white;"><a
                                                    class="nav-link"><i></i>Logout</a></button>
                                        </form>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endauth

                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{ route('home') }}"><img src="{{ url('frontend/logo/logo.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            @auth
                <a href="{{ route('cart.list') }}">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                        data-notify="{{ $cartCount }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </a>
            @endauth
            @guest
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 js-show-cart">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            @endguest


        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                <a href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="{{ request()->is('product-mebel') ? 'active-menu' : '' }}">
                <a href="{{ route('product-front') }}">Belanja</a>
            </li>
            <li>
                <a href="#">Tentang</a>
            </li>

            <li>
                <a href="#">Kontak</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{ url('frontend/images/icons/icon-close2.png') }}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
