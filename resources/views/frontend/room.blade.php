@php
$lang=app()->getLocale();
@endphp
<x-layouts.frontend>
    <!-- Title Banner Start -->
    <section class="title-banner">
        <div class="container-fluid">
            <div class="content room-banner">
                <div class="title-block">
                    <div class="title">
                        <h2 class="h-69">{{__('main.Rooms')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Title Banner End -->

    <!-- Start Page Content -->
    <div class="page-content">

        <!-- Rooms Section Start -->
        <section class="rooms">
            <div class="container-fluid">
                <div class="content content_room_page">
                    <div class="sec-heading text-sm-center mb-48">
                        <p class="h-18 bold light-black text-uppercase sec-text">Luxury Experience</p>
                        <h2 class="h-53 fw-600 light-black sec-title">Experience Elevated Hospitality at Luxe. Where
                            <br>
                            Luxury Meets Comfort.</h2>
                    </div>

                    <div class="tab-content mb-64" id="myTabContent">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-tab">
                            <div class="card-block">
                                <div class="cards">
                                    @foreach($rooms as $room=>$value)
                                        <a href="{{route('room-detail', [$lang, $value->id])}}" class="card-item">
                                            <div class="card-image mb-24">
                                                <div class="card-price">
                                                    <p>
                                                                <span class="color-primary price h-31"
                                                                      style="font-size: 18px;">{{ intval($value->price) .'  '.__('main.Sum')}}</span>
                                                    </p>
                                                    <p><span class="color-primary h-40">{{intval($value->price).' '. __('main.Sum')}}</span>
                                                        <span class="light-bold light-black">/Night</span>
                                                    </p>
                                                </div>
                                                <img src="/assets/media/card-image/image-1.png" class="card-image"
                                                     alt="">
                                                <img src="/assets/media/icon/arrow-dark.png" class="icon" alt="">
                                                <img src="/assets/media/vector-shape/bottom-shape.png" class="corner-shape"
                                                     alt="">
                                            </div>
                                            <div class="text-block">
                                                <div
                                                    class="name-rating d-flex align-items-center justify-content-between mb-16">
                                                    <h4 class="h-31">{{$value->title}}</h4>
                                                    <div class="rating">
                                                        <p class="light-bold"><i
                                                                class="fa-solid fa-star color-primary"></i>
                                                            4.9</p>
                                                    </div>
                                                </div>
                                                <p class="sample-text mb-32">{{$value->description}}</p>
                                                    @php
                                                        $icons = $value->types()->where('is_active', true)->latest()->take(3)->get();
                                                    @endphp
                                                <ul class="services unstyled">
                                                    @foreach($icons as $icon)
                                                        <li>
                                                            <img src="{{$icon->getMedia('icon-image')->first()->getUrl()}}"
                                                                 alt="">
                                                            <p class="h-18 bold light-black">{{$icon->value_name}}</p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="room-bottom-shapes">
                    <div class="shape-right text-end">
                    </div>
                    <div class="shape-left">
                    </div>
                </div>
            </div>
        </section>
        <!-- Rooms Section End -->

    </div>
</x-layouts.frontend>
