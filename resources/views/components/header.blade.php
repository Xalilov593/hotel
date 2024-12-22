@php
    $lang=app()->getLocale();

@endphp
<header class="home-header">
    <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="{{route('home', $lang)}}">
            <img src="/css/filament/logo.png" alt="" style="width: 300px">
            </a>
        </div>
        <ul class="link unstyled d-sm-flex d-none  align-items-center">
            <li>
                <a href="{{ route('home')}}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">{{__('main.home')}}</a>
            </li>
            <li>
                <a href="{{ route('about')}}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }} nowrap  inline-block">{{__('main.About')}}</a>
            </li>
            <li class="link-has-children">
                <a href="{{ route('rooms', $lang)}}"
                   class="{{ request()->routeIs('rooms') ? 'active' : ''}}">{{__('main.Rooms')}}</a>
            </li>
            <li class="link-has-children">
                <a href="{{ route('services')}}"
                   class="{{ request()->routeIs('blog') ? 'active' : ''}}">{{__('main.Services')}}</a>

            </li>
            <li>
                <a href="{{ route('contact', $lang)}}"
                   class="{{ request()->routeIs('contact') ? 'active' : ''}}">{{__('main.contact')}}</a>
            </li>
        </ul>
        <!-- ============= MOBILE SIDEBAR =============== -->
        <div class="mobile-header d-sm-none d-block">
            <div class="btn">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M20.3135 3.125H5.31348V4.375H20.3135V3.125ZM0.313477 9.375H20.3135V10.625H0.313477V9.375ZM5.31348 15.625H20.3135V16.875H5.31348V15.625Z"
                              fill="#282525"></path>
                    </svg>
                </span>
            </div>

            <nav class="sidebar">
                <div class="logo">
                    <img src="assets/media/mobile-logo.png" alt="">
                </div>
                <ul class="unstyled">
                    <li class="active"><a href="{{ route('home')}}">Home</a></li>
                    <li><a href="{{ route('about')}}">About</a></li>
                    <li>
                        <a href="javascript:;" class="menu-btn">Rooms
                            <span class="fas fa-caret-down first"></span>
                        </a>
                        <ul class="menu-item">
                            <li><a href="room-grid.html">Rooms Grid</a></li>
                            <li><a href="room-list.html">Rooms List</a></li>
                            <li><a href="room-detail.html">Rooms Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu-btn">Blogs
                            <span class="fas fa-caret-down second"></span>
                        </a>
                        <ul class="menu-item unstyled">
                            <li><a href="blog-grid.html">Blogs Grid</a></li>
                            <li><a href="blog-sidebar.html">Blogs Sidebar</a></li>
                            <li><a href="blog-detail.html">Blogs Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu-btn">Pages
                            <span class="fas fa-caret-down third"></span>
                        </a>
                        <ul class="menu-item unstyled">
                            <li><a href="restaurant.html">Restaurant</a></li>
                            <li><a href="spa-relax.html">Spa & Relax</a></li>
                            <li><a href="offers.html">Offers</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="booking.html">Booking Form</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="error.html">Error</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- ============= MOBILE SIDEBAR =============== -->

        <div class="dropdown">
            @auth
                <div class="dropdown-btn1">
                    <button type="button" class="btn btn-success">
                        <i class="fa-duotone fa-regular fa-user"></i>{{auth()->user()->name}}
                    </button>
                </div>
            @else
                <div class="dropdown-btn1">
                    <a  href="{{route('login', $lang)}}" class="cus-btn">
                        Kirish
                    </a>
                </div>
            @endauth
            @auth
                <div class="dropdown-content">
                    <a href="" class="d-flex inline-block">Profil</a>
                    <a href="" class="d-flex inline-block"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Chiqish
                    </a>
                    <form id="logout-form" action="{{route('logout', $lang)}}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>

        <div class="nav-logo d-sm-flex d-none ">
            <div class="logo-icon">
                <form action="index.html">
                    <div class="search-block">
                        <input type="search" class="" name="search" id="search" placeholder="Search...">
                        <button type="submit" id="magnifying-btn"><i class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <style>

                </style>

                <div class="dropdown">
                    <div class="dropdown-btn">
                        @if($lang=='en')
                            <img src="/css/filament/usa.png" style="width: 40px; margin-right: 2px" alt="uzb flag">
                            English
                        @elseif($lang=='ru')
                            <img src="/css/filament/rus.png" style="width: 40px; margin-right: 2px" alt="uzb flag">
                            Русский
                        @else
                            <img src="/css/filament/uzb.png" style="width: 40px; margin-right: 2px" alt="uzb flag">
                            O'zbekcha
                        @endif
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ url('/en') }}" class="d-flex inline-block"> <img src="/css/filament/usa.png"
                                                                                     style="width: 40px" alt="uzb flag">English</a>
                        <a href="{{ url('/ru') }}"> <img src="/css/filament/rus.png" style="width: 40px" alt="uzb flag">Русский</a>
                        <a href="{{ url('/uz') }}"> <img src="/css/filament/uzb.png" style="width: 40px" alt="uzb flag">O'zbekcha</a>
                    </div>
                </div>

            </div>

        </div>
    </div>


</header>
<script>
    const dropdownBtn = document.querySelector('.dropdown-btn');
    const dropdownContent = document.querySelector('.dropdown-content');
    dropdownBtn.addEventListener('click', function (event) {
        event.stopPropagation();
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function () {
        dropdownContent.style.display = 'none';
    });
const dropdownBtn = document.querySelector('.dropdown-btn1');
    const dropdownContent = document.querySelector('.dropdown-content1');
    dropdownBtn.addEventListener('click', function (event) {
        event.stopPropagation();
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function () {
        dropdownContent.style.display = 'none';
    });







</script>
