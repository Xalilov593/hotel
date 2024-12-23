@php
    $lang=app()->getLocale();
@endphp

<header>
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <div class="container px-3">
            <a href="{{route('home' , app()->getLocale())}}"><img src="/css/filament/logo.png" style="width: 300px"
                                                                  alt="brand" class="mb-3"></a>
            {{--            <a class="navbar-brand" href="{{route('home', $lang)}}"><img style="width: 40px" src="/logo.svg" alt=""></a>--}}
            <button class="navbar-toggler offcanvas-nav-btn" type="button">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                <div class="offcanvas-header">
                    <a href="{{route('home', $lang)}}" class="text-inverse"><img src="/logo.svg" alt=""></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home', $lang)}}"
                               aria-expanded="false">{{__('main.Home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('about', $lang)}}"
                               aria-expanded="false">{{__('main.About')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('rooms', $lang)}}"
                               aria-expanded="false">{{__('main.Rooms')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('contact', $lang)}}"
                               aria-expanded="false">{{__('main.contact')}}</a>
                        </li>


                    </ul>
                </div>

            </div>
            <div class="mt-3 mt-lg-0 d-flex align-items-center">
                <ul class=" navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            @if($lang=='en')
                                English
                            @elseif($lang=='ru')
                                Русский
                            @else
                                O'zbekcha
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/en') }}" class="dropdown-item"> English</a>
                                <a href="{{ url('/ru') }}" class="dropdown-item"> Русский</a>
                                <a href="{{ url('/uz') }}" class="dropdown-item"> O'zbekcha</a>
                            </li>

                        </ul>
                    </li>
                </ul>
                @auth
                    <a href="{{route('profile', [$lang, auth()->user()->id ])}}">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            @if(auth()->user()->avatar)
                                <img src="{{ auth()->user()->avatar }}" alt="avatar" class="avatar avatar-lg rounded-circle">
                            @else
                                <div class="avatar avatar-lg rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                                     style="width: 50px; height: 50px;">
                                    <span class="fs-4">{{ strtoupper(auth()->user()->name[0]) }}</span>
                                </div>
                            @endif
                            <div class="ms-3">
                                <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="{{route('login', $lang)}}" class="btn btn-light mx-2">Login</a>
                    <a href="{{route('register', $lang)}}" class="btn btn-primary">Create account</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
