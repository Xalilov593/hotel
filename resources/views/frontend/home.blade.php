@extends('components.layouts.frontend')
@section('main')
    <main>
        @php
            $image=$images->first();
            $aboutImage1=$aboutImages->get(1);
            $aboutImage2=$aboutImages->get(2);
            $aboutImage3=$aboutImages->get(3);
        @endphp
                <!--hero start-->
        <section class="jarallax py-9 hero-agency" data-jarallax="" data-speed="0.4">
            <img class="jarallax-img" src="{{$image->getUrl()}}" alt="agency">
            <div class="position-absolute start-0 end-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-12" data-cue="zoomIn">
                            <div class="text-center text-lg-start">
                                <div class="mb-4 text-white-stable">
                                    <small class="text-uppercase ls-lg">Jamstack Development Agency</small>
                                    <h1 class="mb-3 mt-3 display-3 text-white-stable">We build fast sites & apps.</h1>
                                    <p class="lead mb-0">Block is an agency that designs and develops e-commerce,
                                        marketing websites, web applications, and mobile apps.</p>
                                </div>

                                <a href="#!" class="btn btn-primary">Start project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero end-->

        <!--Logo section start-->
        <div class="container" data-cue="fadeIn">
            <div class="row border-top border-bottom mt-2">
                <div class="col-md-3 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <div class="mb-3">
                        <label for="arrivalDate" class="form-label">Kelish sanasi</label>
                        <input type="text" class="form-control input-date-formatting" id="arrivalDate"
                               placeholder="YYYY-MM-DD" required/>
                    </div>
                </div>
                <div class="col-md-3 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <div class="mb-3">
                        <label for="departureDate" class="form-label">Chiqish sanasi</label>
                        <input type="text" class="form-control input-date-formatting" id="departureDate"
                               placeholder="YYYY-MM-DD" required/>
                    </div>
                </div>

                <div class="col-md-3 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <label for="selectForm" class="form-label">{{__('main.Rooms')}}</label>
                    <select id="selectForm" class="form-select" aria-label="Default select example">
                        <option selected>Xonalardan birini tanlang</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3 " data-cue="zoomIn">
                    <div class="mb-3 mt-5">
                        <button type="button" class="btn btn-light form-control ">Book</button>
                    </div>
                </div>

            </div>
        </div>
        <!--Logo section end-->


        <!--Who we are start-->
        <section class="my-xl-9 my-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft">
                        <div class="mb-4">
                            <small class="text-uppercase ls-md fw-semibold">{{__('main.About')}}</small>
                            <h2 class="h1 mt-4 mb-3">{{$about->title}}</h2>
                            @php
                                $firstParagraph = preg_match('/.*?<\/p>/', $about->description, $matches) ? $matches[0] : '';
                            @endphp

                            <p class="mb-3">{!! $firstParagraph !!}</p>
                        </div>

                        <a href="{{route('about',  app()->getLocale())}}" class="icon-link icon-link-hover">
                            More about us
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                 class="bi bi-arrow-right" viewbox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                        <div class="row g-4" data-cues="slideInUp" data-delay="1000">
                            <div class="col-lg-6 col-md-6 col-12">
                                @isset($aboutImage1)
                                    <a href="{{ route('about', app()->getLocale()) }}">
                                        <div class="rounded-3 card-lift"
                                             style="background-image: url({{ $aboutImage1->getUrl() }}); background-repeat: no-repeat; height: 386px; background-size: cover">
                                        </div>
                                    </a>
                                @endisset

                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                @isset($aboutImage2)
                                    <a href="{{route('about',  app()->getLocale())}}">
                                        <div class="mb-4 rounded-3 card-lift"
                                             style="background-image: url({{$aboutImage2->getUrl()}}); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                                    </a>
                                @endisset
                                @isset($aboutImage3)
                                    <a href="{{route('about',  app()->getLocale())}}">
                                        <div class="mb-2 rounded-3 card-lift"
                                             style="background-image: url({{$aboutImage3->getUrl()}}); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                                    </a>
                                @endisset

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Who we are end-->

        <!--Expert team start-->
        <section>
            <div class="container" data-cue="fadeIn">
                <div class="row border-top border-bottom">
                    <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                        <div class="text-center py-lg-5 p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-people-fill text-primary" viewbox="0 0 16 16">
                                    <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
                                </svg>
                            </div>

                            <h4>Expert team</h4>
                            <p class="mb-0">Vivamus eget neque lacus. Pellentesque egauris ex.</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                        <div class="text-center py-lg-5 p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-trophy-fill text-primary" viewbox="0 0 16 16">
                                    <path
                                            d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"></path>
                                </svg>
                            </div>

                            <h4>Award winning agency</h4>
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur elitorceat .</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-cue="zoomIn">
                        <div class="text-center py-lg-5 p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-stars text-primary" viewbox="0 0 16 16">
                                    <path
                                            d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"></path>
                                </svg>
                            </div>

                            <h4>10 Year Exp.</h4>
                            <p class="mb-0">Pellen tesque eget, mauris lorem iupsum neque lacus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Expert team end-->


        <!--Project we done start-->
        <section class="my-xl-9 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                            <small class="text-uppercase ls-md fw-semibold">Project we done</small>

                            <h2 class="my-3">{{__('main.Rooms')}}</h2>
                            <p class="mb-0">We're a web design agency creating next‑level websites by strategically
                                blending user experience and brand storytelling.</p>
                        </div>
                    </div>
                </div>
                <div class="table-responsive-lg">
                    <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                        @foreach($rooms as $room=>$value)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div data-cue="zoomIn">
                                    <figure class="lift position-relative btn-arrow mb-4">
                                        <a href="{{route('room-detail', [app()->getLocale(), $value->id])}}">
                                            @php
                                                $images = $value->getMedia('room-images');
                                            @endphp
                                            <div
                                                    class="swiper-container swiper"
                                                    id="swiper-1"
                                                    data-pagination-type=""
                                                    data-speed="400"
                                                    data-space-between="100"
                                                    data-pagination="true"
                                                    data-navigation="false"
                                                    data-autoplay="true"
                                                    data-autoplay-delay="3000"
                                                    data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                                                <div class="swiper-wrapper pb-6 mx-auto">
                                                    @foreach($images as $image)
                                                        <div class="swiper-slide">
                                                            <img src="{{$image->getUrl()}}" alt="project"
                                                                 class="img-fluid rounded-3"/>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <!-- Add Pagination -->
                                                <div class="swiper-pagination"></div>
                                                <!-- Add Navigation -->
                                                <div class="swiper-navigation">
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>

                                            </div>
                                        </a>
                                    </figure>

                                    <h3 class="my-3 lh-base h4">
                                        <a href="{{route('room-detail', [app()->getLocale(), $value->id])}}"
                                           class="badge bg-primary-subtle text-primary-emphasis rounded-pill">{{ intval($value->price) .'  '.__('main.Sum')}}
                                            / Night</a>
                                        <a href="{{route('room-detail', [app()->getLocale(), $value->id])}}"
                                           class="text-reset">{{$value->title}}</a>
                                    </h3>
                                    @php
                                        $iconsRoom = $value->types()->where('is_active', true)->latest()->take(4)->get();
                                    @endphp

                                    <ul class="nav justify-content-center nav-logo" id="pills-tabOne" role="tablist">
                                        @foreach($iconsRoom as $icon)
                                            <li class="nav-item" role="presentation">
                                                <a
                                                        href=""
                                                        class="nav-link active"
                                                        id="pills-vercel-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#pills-vercel"
                                                        role="tab"
                                                        aria-controls="pills-vercel"
                                                        aria-selected="true">
                                                    <figure>
                                                        <img style="width: 33px"
                                                             src="{{$icon->getMedia('icon-image')->first()->getUrl()}}"
                                                             alt="img"/>
                                                        <p class="mb-0 text-body-tertiary fw-medium">{{$icon->value_name}}</p>
                                                    </figure>

                                                </a>

                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--Project we done end-->


        <!--Modern tech start-->
        <section class="py-xl-9 py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
                        <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                            <small class="text-uppercase ls-md fw-semibold">modern tech stack</small>
                            <h2 class="my-3">{{__('main.Services')}}</h2>
                            <p class="mb-0 text-body">
                                We work with cutting-edge technologies designed to solve your product requirements.
                                Focus on finding solutions for your business needs while we handle the technical aspect.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="row row-cols-lg-5 row-cols-md-4 row-cols-2 justify-content-center g-5">
                            @foreach($icons as $icon)
                                <div class="col" data-cue="slideInDown">
                                    <figure class="text-center mb-0">
                                        <img style="width: 40px;"
                                             src="{{$icon->getMedia('icon-image')->first()->getUrl()}}" alt="logo">
                                        <p class="mb-0 text-body-tertiary fw-medium">{{$icon->value_name}}</p>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Modern tech end-->

        <!--Hire jamstack start-->
        <section class="pattern-square bg-info bg-opacity-10">
            <div class="container position-relative z-1 py-xl-9 py-6">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                <div class="mb-7 text-center text-lg-start">
                                    <div class="mb-3">
                                        <img src="/css/filament/logo.png "
                                             alt="avatar"
                                             class="w-100"/>
                                    </div>
                                </div>
                                <div class="d-flex mb-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-geo-alt-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg>
                                    </div>
                                    <div class="ms-2">
                                        <h5 class="mb-0">Address:</h5>
                                        <small>{{$contact->address}}</small>
                                    </div>
                                </div>
                                <div class="d-flex mb-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-telephone"
                                             viewBox="0 0 16 16">
                                            <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                    </div>
                                    <div class="ms-2">
                                        <h5 class="mb-0">Phone:</h5>
                                        <small>
                                            <a href="tel:{{$contact->number_1}}"
                                               class="text-reset">{{$contact->number_1}}</a>
                                            <span class="ms-lg-3"><a href="tel:{{$contact->number_2}}"
                                                                     class="text-reset">{{$contact->number_2}}</a></span>
                                        </small>
                                    </div>
                                </div>
                                <div class="d-flex mb-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-envelope-check"
                                             viewBox="0 0 16 16">
                                            <path
                                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                            <path
                                                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                                        </svg>
                                    </div>
                                    <div class="ms-2">
                                        <h5 class="mb-0">E-mail:</h5>

                                        <small>
                                            <a href="emailto:{{$contact->email_1}}"
                                               class="text-reset">{{$contact->email_1}}</a>
                                            <span class="ms-lg-3"><a href="emailto:{{$contact->email_2}}"
                                                                     class="text-reset">{{$contact->email_2}}</a></span>
                                        </small>
                                    </div>
                                </div>
                                <div>
                                    <a href="#!"
                                       class="text-reset btn btn-instagram btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-instagram"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </a>
                                    <a href="#!"
                                       class="text-reset btn btn-twitter btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-twitter"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                    </a>
                                    <a href="#!"
                                       class="text-reset btn btn-youtube btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-youtube"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                        </svg>
                                    </a>
                                    <a href="#!"
                                       class="text-reset btn btn-linkedin btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-linkedin"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                                    </a>
                                    <a href="#!"
                                       class="text-reset btn btn-instagram btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-instagram"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-lg-2" data-cue="slideInRight">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <form class="row needs-validation g-3" novalidate="">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <h3 class="mb-0">Schedule a free estimate call</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="ScheduleFirstnameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="ScheduleFirstnameInput"
                                                       required="">
                                                <div class="invalid-feedback">Please enter firstname.</div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="scheduleLastnameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="scheduleLastnameInput"
                                                       required="">
                                                <div class="invalid-feedback">Please enter lastname.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="scheduleEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="scheduleEmailInput"
                                                       required="">
                                                <div class="invalid-feedback">Please enter email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="scheduleTextarea" class="form-label">Message</label>
                                                <textarea class="form-control" id="scheduleTextarea"
                                                          placeholder="Write to us" rows="3" required=""></textarea>
                                                <div class="invalid-feedback">Please write message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Let’s work together!
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Hire jamstack end-->
    </main>
@endsection
