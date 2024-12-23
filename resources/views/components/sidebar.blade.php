    <div class="col-lg-3 col-md-4">
        <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">
            @if(auth()->user()->avatar)
                <img src="{{ auth()->user()->avatar }}" alt="avatar"
                     class="avatar avatar-lg rounded-circle">
            @else
                <div
                    class="avatar avatar-lg rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                    style="width: 50px; height: 50px;">
                    <span class="fs-4">{{ strtoupper(auth()->user()->name[0]) }}</span>
                </div>
            @endif
            <div class="ms-3">
                <h5 class="mb-0">{{auth()->user()->name}}</h5>
                <small>Personal account</small>
            </div>
        </div>

        <!-- Navbar -->
        <div class="mb-4 text-center text-md-start">
            <a href="#" class="text-reset">
                            <span>
                               <span>View site / profile</span>
                            </span>
                <span class="ms-2">
                               <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-box-arrow-up-right" viewbox="0 0 16 16">
                                  <path fill-rule="evenodd"
                                        d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"></path>
                                  <path fill-rule="evenodd"
                                        d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"></path>
                               </svg>
                            </span>
            </a>
        </div>
        <div class="d-md-none text-center d-grid">
            <button class="btn btn-light mb-3 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountMenu"
                    aria-expanded="false" aria-controls="collapseAccountMenu">
                Account Menu
                <i class="bi bi-chevron-down ms-2"></i>
            </button>
        </div>
        <div class="collapse d-md-block" id="collapseAccountMenu">
            <ul class="nav flex-column nav-account">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home', app()->getLocale())}}">
                        <i class="align-bottom bx bx-home"></i>
                        <span class="ms-2">{{__('main.Home')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}"
                       href="{{route('profile', [app()->getLocale(), auth()->user()->id])}}">
                        <i class="align-bottom bx bx-user"></i>
                        <span class="ms-2">Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('security') ? 'active' : '' }}" aria-current="page"
                       href="{{route('security', [app()->getLocale(), auth()->user()->id])}}">
                        <i class="align-bottom bx bx-lock-alt"></i>
                        <span class="ms-2">Havfsizlik</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('invoice') ? 'active' : '' }}"
                       href="{{route('invoice', [app()->getLocale(), auth()->user()->id])}}">
                        <i class="align-bottom bx bx-credit-card-front"></i>
                        <span class="ms-2">Buyurtmalar</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('social') ? 'active' : '' }}"
                       href="{{route('social', [app()->getLocale(), auth()->user()->id])}}">
                        <i class="align-bottom bx bx-link"></i>
                        <span class="ms-2">Ijtimoiy tarmoqlar</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="align-bottom bx bx-log-out"></i>
                        <span class="ms-2">Chiqish</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

    </div>
