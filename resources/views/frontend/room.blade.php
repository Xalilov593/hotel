@extends('components.layouts.frontend')
@section('main')
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-10 py-lg-8">
        <div class="container">
            <div class="row mt-8">
                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                    <h1 class="mb-3">{{__('main.Rooms')}}</h1>
                </div>
            </div>
        </div>
    </section>
    <main>
        <!--Visualize & plan start-->
       @foreach($rooms as $room=>$value)
            <section class="my-xl-7 py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12" data-cue="slideInLeft">
                            <div data-cue="fadeIn">
                                <small class="text-primary text-uppercase ls-md fw-semibold">{{ intval($value->price) .'  '.__('main.Sum')}}  /  Night</small>
                                <div class="mb-5 mt-4">
                                    <h2 class="mb-3">{{$value->title}}</h2>
                                    <p class="mb-0 lead">{!! $value->description !!}</p>
                                </div>

                                <a href="{{route('room-detail', [app()->getLocale(), $value->id])}}" class="icon-link icon-link-hover">
                                    Xonani band qilish
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                         class="bi bi-arrow-right" viewbox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @php
                            $images = $value->getMedia('room-images');
                            @endphp
                        <div class="col-lg-6 offset-lg-1 col-md-6 col-12" data-cue="slideInRight">
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
                                            <img src="{{$image->getUrl()}}" alt="project" class="img-fluid rounded-3" />
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
                        </div>
                    </div>
                </div>
            </section>
       @endforeach
        <!--Visualize & plan end-->

    </main>
@endsection
