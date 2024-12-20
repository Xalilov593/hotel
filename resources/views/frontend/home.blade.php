
<x-layouts.frontend>
    <!-- Hero Section Start -->
    <section class="hero-banner" id="hero">
        <div class="container-fluid wd-100">
            <div class="banner__slider">
                <div class="slider stick-dots">
                    @foreach($images as $image)
                        <div class="slide">
                            <div class="slide__img">
                                <img src="{{$image->getUrl()}}" alt=""
                                     class="full-image animated d-sm-block d-none" data-animation-in="zoomInImage">
                                <img src="{{$image->getUrl()}}" alt=""
                                     class="full-image animated d-sm-none d-block" data-animation-in="zoomInImage">
                            </div>
                            <div class="slide__content">
                                <div class="slide__content--headings">
                                    {{--                                <h1 class="h-111 light-black mb-1" data-animation-in="fadeInUp">Luxury Suite</h1>--}}
                                    {{--                                <h4 class="h-56 light-black" data-animation-in="fadeInUp">Discounted Prices</h4>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="booking">
                    <div class="booking-detail">
                        <form action="room-grid.html">
                            <div class="info">
                                <div class="detail">
                                    <div class="input-date-picker">
                                        <label for="checkIn" class="date_label h-18 dark-gray">Check In</label>
                                        <input type="text" class="sel-input date_from" id="checkIn"
                                               placeholder="30 Jan, 2024">
                                    </div>
                                    <div class="vertical-line d-xl-flex d-none"></div>
                                    <div class="input-date-picker">
                                        <label for="checkOut" class="date_label h-18 dark-gray">Check Out</label>
                                        <input type="text" class="sel-input date_to" id="checkOut"
                                               placeholder="30 Jan, 2024">
                                    </div>
                                    <div class="vertical-line d-xl-flex d-none"></div>
                                    <div class="input-date-picker">
                                        <label for="guests-room" class="date_label h-18 dark-gray mb-1">Guests and
                                            Rooms</label>
                                        <!-- Room Popup -->
                                        <div class="custom-sel-input-block ">
                                            <div class="seat-booking light-black sel-input" id="seat-booking">
                                                <span class="total-pasenger" id="total-guest">0 </span>
                                                Guest /
                                                <span class="total-room" id="total-room"> 0 </span>
                                                Room
                                            </div>
                                            <div class="guest-area guest-box bg-white light-shadow br-5 p-24">
                                                <h4 class="light-black mb-32">Select Guests</h4>
                                                <div class="guest-box mb-24">
                                                    <div class="row">
                                                        <div class="col-md-7 col-sm-6 col-6">
                                                            <div class="content-box">
                                                                <h5 class="h-18 fw-600 light-black">Guest</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-sm-6 col-6">
                                                            <div class="quantity quantity-wrap">
                                                                <input class="decrement" type="button"
                                                                       value="-" id="decrement-guest">
                                                                <input type="text" name="quantity" value="0"
                                                                       maxlength="2" size="1" id="guest"
                                                                       class="number">
                                                                <input class="increment" type="button"
                                                                       value="+" id="increment-guest">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="guest-box">
                                                    <div class="row">
                                                        <div class="col-md-7 col-sm-6 col-6">
                                                            <div class="content-box">
                                                                <h5 class="h-18 fw-600 light-black">Room</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-sm-6 col-6">
                                                            <div class="quantity quantity-wrap">
                                                                <input class="decrement" type="button"
                                                                       value="-" id="decrement-room">
                                                                <input type="text" name="quantity" value="0"
                                                                       maxlength="2" size="1" id="room"
                                                                       class="number">
                                                                <input class="increment" type="button"
                                                                       value="+" id="increment-room">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Room Popup -->
                                    </div>
                                    <button class="cus-btn w-100 d-sm-none d-block">
                                        <span>
                                            <samp class="text">Book Now</samp>
                                            <samp class="effect">Book Now</samp>
                                        </span>
                                    </button>
                                </div>
                                <button class="cus-btn d-sm-block d-none">
                                    <span>
                                        <samp class="text">Book Now</samp>
                                        <samp class="effect">Book Now</samp>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Start Page Content -->
    <div class="page-content ">
        <!-- Rooms Section Start -->
        <section class="rooms">
            <div class="container-fluid">
                <div class="content">
                    <div class="sec-heading text-sm-center mb-48">
                        <p class="h-18 bold light-black text-uppercase sec-text">Luxury Experience</p>
                        <h2 class="h-69 light-black sec-title">Our Luxury Rooms</h2>
                    </div>
                    <div class="card-block" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                         data-sal-easing="ease-in-out">
                        <div class="cards">
                            @foreach($rooms as $room=>$value)
                                <a href="{{route('room-detail', [$lang, $value->id])}}" class="card-item">
                                    <div class="card-image mb-24">
                                        <div class="card-price">
                                            <p>
                                                                <span class="color-primary price h-31"
                                                                      style="font-size: 18px;">{{ intval($value->price) .'  '.__('main.Sum')}}</span>
                                            </p>
                                        </div>
                                        <img src="./assets/media/card-image/image-1.png" class="card-image"
                                             alt="">
                                        <img src="./assets/media/icon/arrow-dark.png" class="icon" alt="">
                                        <img src="./assets/media/vector-shape/bottom-shape.png" class="corner-shape"
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
                <div class="btn-block text-end">
                    <a href="room-list.html" class="cus-btn dark">
                        <span>
                            <samp class="text">See All Rooms</samp>
                            <samp class="effect">See All Rooms</samp>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Rooms Section End -->

        <!-- Video Section Start -->
        <div class="resturent-video" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
             data-sal-easing="ease-in-out">
            <div class="container-fluid">
                <div class="content">
                    <img src="./assets/media/vector-shape/right-top.png" class="top-cornner" alt="">
                    <div class="bg-video">
                        <video src="./assets/media/video/hotel-video.mp4" loop="" muted=""
                               autoplay=""></video>
                    </div>
                    <img src="./assets/media/vector-shape/right-bottom.png" class="bottom-cornner" alt="">
                </div>
            </div>
        </div>
        <!-- Video Section End -->

        <!-- Suite Room Section Start -->
        <section class="suite-room" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                 data-sal-easing="ease-in-out">
            <div class="container-fluid">
                <div class="sec-heading sec right text-end">
                    <div class="heading-content">
                        <p class="h-18 bold light-black text-uppercase">SUITES</p>
                        <h2 class="h-69 light-black">Luxury Honeymoon Suites</h2>
                    </div>
                    <div class="slider-arrow">
                        <button class="arrow prev-btn" data-slide="room-slider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                 viewbox="0 0 33 32" fill="none">
                                <path
                                    d="M12.8057 23C12.8057 20 10.0057 16 6.80566 16M6.80566 16C8.639 16 12.8057 15 12.8057 9M6.80566 16H25.8057"
                                    stroke="#1B1918" stroke-width="2"></path>
                            </svg>
                        </button>
                        <button class="arrow next-btn" data-slide="room-slider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                 viewbox="0 0 32 32" fill="none">
                                <path
                                    d="M19.3545 23C19.3545 20 22.1545 16 25.3545 16M25.3545 16C23.5212 16 19.3545 15 19.3545 9M25.3545 16H6.35449"
                                    stroke="#1B1918" stroke-width="2"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="content">
                    <div class="room-slider sliders" data-parent="suite-room">
                        <div class="slide">
                            <div class="slide__img">
                                <img class="room_image" src="./assets/media/card-image/couple-room.png"
                                     alt="">
                                <img src="./assets/media/vector-shape/luxury-room-vec.png" alt=""
                                     class="side_vector d-sm-block d-none">
                                <img src="./assets/media/vector-shape/mobile-room.png" alt=""
                                     class="side_vector_mobile d-sm-none d-block">
                            </div>
                            <div class="slide__content">
                                <div class="content-block animated faster" data-animation-in="fadeInUp">
                                    <h2 class="h-53 light-black mb-16"><a href="room-detail.html">Grand Luxury
                                            Room</a></h2>
                                    <div class="price-rating mb-32">
                                        <p><span class="color-primary h-40">$360</span>
                                            <span class="light-bold light-black">/Night</span>
                                        </p>
                                        <p class="light-bold reviews-text"><i
                                                class="fa-solid fa-star color-primary"></i> 4.9
                                            (93) REVIEWS</p>
                                    </div>
                                    <p class="mb-32 reviews-text">Explore the intricacies of our journey, commitment to
                                        hospitality, and the unique features that make Explore the intricacies
                                        of our journey, commitment to hospitality, and the unique features.</p>
                                    <ul class="services unstyled mb-32">
                                        <li><img src="./assets/media/icon/double-bed-icon.png" alt="">
                                            <p class="h-18 bold light-black"> King Size Bed</p>
                                        </li>
                                        <li><img src="./assets/media/icon/tv-icon.png" alt="">
                                            <p class="h-18 bold light-black"> 32 Inc TV</p>
                                        </li>
                                        <li><img src="./assets/media/icon/food-icon.png" alt="">
                                            <p class="h-18 bold light-black"> Breakfast</p>
                                        </li>
                                    </ul>
                                    <a href="booking.html" class="cus-btn">
                                        <span>
                                            <samp class="text">Book Now</samp>
                                            <samp class="effect">Book Now</samp>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide__img">
                                <img class="room_image" src="./assets/media/card-image/family-room.png"
                                     alt="">
                                <img src="./assets/media/vector-shape/luxury-room-vec.png" alt=""
                                     class="side_vector d-sm-block d-none">
                                <img src="./assets/media/vector-shape/mobile-room.png" alt=""
                                     class="side_vector_mobile d-sm-none d-block">

                            </div>
                            <div class="slide__content">
                                <div class="content-block animated faster" data-animation-in="fadeInUp">
                                    <h2 class="h-53 light-black mb-16"><a href="room-detail.html">Family Room</a></h2>
                                    <div class="price-rating mb-32">
                                        <p><span class="color-primary h-40">$380</span><span
                                                class="light-bold light-black">/Night</span></p>
                                        <p class="light-bold reviews-text"><i
                                                class="fa-solid fa-star color-primary"></i> 4.9
                                            (93) REVIEWS</p>
                                    </div>
                                    <p class="mb-32 reviews-text">Explore the intricacies of our journey, commitment to
                                        hospitality, and the unique features that make Explore the intricacies
                                        of our journey, commitment to hospitality, and the unique features.</p>
                                    <ul class="services unstyled mb-32">
                                        <li><img src="./assets/media/icon/double-bed-icon.png" alt="">
                                            <p class="h-18 bold light-black"> King Size Bed</p>
                                        </li>
                                        <li><img src="./assets/media/icon/tv-icon.png" alt="">
                                            <p class="h-18 bold light-black"> 32 Inc TV</p>
                                        </li>
                                        <li><img src="./assets/media/icon/food-icon.png" alt="">
                                            <p class="h-18 bold light-black"> Breakfast</p>
                                        </li>
                                    </ul>
                                    <a href="booking.html" class="cus-btn">
                                        <span>
                                            <samp class="text">Book Now</samp>
                                            <samp class="effect">Book Now</samp>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide__img">
                                <img class="room_image" src="./assets/media/card-image/deluxe-room.png"
                                     alt="">
                                <img src="./assets/media/vector-shape/luxury-room-vec.png" alt=""
                                     class="side_vector d-sm-block d-none">
                                <img src="./assets/media/vector-shape/mobile-room.png" alt=""
                                     class="side_vector_mobile d-sm-none d-block">

                            </div>
                            <div class="slide__content">
                                <div class="content-block animated faster" data-animation-in="fadeInUp">
                                    <h2 class="h-53 light-black mb-16"><a href="room-detail.html">Deluxe Room</a></h2>
                                    <div class="price-rating mb-32">
                                        <p><span class="color-primary h-40">$430</span><span
                                                class="light-bold light-black">/Night</span></p>
                                        <p class="light-bold reviews-text"><i
                                                class="fa-solid fa-star color-primary"></i> 4.9
                                            (93) REVIEWS</p>
                                    </div>
                                    <p class="mb-32 reviews-text">Explore the intricacies of our journey, commitment to
                                        hospitality, and the unique features that make Explore the intricacies
                                        of our journey, commitment to hospitality, and the unique features.</p>
                                    <ul class="services unstyled mb-32">
                                        <li><img src="./assets/media/icon/double-bed-icon.png" alt="">
                                            <p class="h-18 bold light-black"> King Size Bed</p>
                                        </li>
                                        <li><img src="./assets/media/icon/tv-icon.png" alt="">
                                            <p class="h-18 bold light-black"> 32 Inc TV</p>
                                        </li>
                                        <li><img src="./assets/media/icon/food-icon.png" alt="">
                                            <p class="h-18 bold light-black"> Breakfast</p>
                                        </li>
                                    </ul>
                                    <a href="booking.html" class="cus-btn">
                                        <span>
                                            <samp class="text">Book Now</samp>
                                            <samp class="effect">Book Now</samp>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-shape text-end">
                    <img src="./assets/media/bg-shape/right-corner-shape.png" alt="">
                </div>
            </div>
        </section>
        <!-- Suite Room Section End -->

        <!-- Activities Section Start -->
        <section class="activities" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                 data-sal-easing="ease-in-out">
            <div class="container-fluid">
                <div class="sec-heading sec-2 text-start">
                    <div class="heading-content">
                        <p class="h-18 bold light-black justify-content-start text-uppercase sec-text">Facilities</p>
                        <h2 class="h-69 light-black local-activities">Local Activities</h2>
                    </div>
                </div>
                <div class="content">
                    <div class="row mb-48">
                        <div class="col-md-4">
                            <a href="restaurant.html">
                                <div class="activitie-card">
                                    <div class="intersect">
                                        <img src="./assets/media/vector-shape/center-shape.png" class=""
                                             alt="">
                                    </div>
                                    <div class="card-image">
                                        <img src="./assets/media/card-image/image-8.png" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="h-31 mb-32 card-title">Restaurant</h5>
                                        <p>Consistency is key, and this place nails it every time. Whether it's a
                                            quick lunch or a late-night snack, the quality is consistently.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="spa-relax.html">
                                <div class="activitie-card sec">
                                    <div class="intersect">
                                        <img src="./assets/media/vector-shape/center-shape.png" class=""
                                             alt="">
                                    </div>
                                    <div class="card-content d-sm-block d-none">
                                        <h5 class="h-31 mb-32 card-title">Swimming Pool & SPA</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur. Nec vel arcu mi pulvinar egestas.
                                            Libero ut nisi mauris sed.</p>
                                    </div>
                                    <div class="card-image">
                                        <img src="./assets/media/card-image/image-9.png" alt="">
                                        <img src="./assets/media/card-image/image-10.png" alt="">
                                    </div>
                                    <div class="card-content d-sm-none d-block">
                                        <h5 class="h-31 mb-32 card-title">Swimming Pool & SPA</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur. Nec vel arcu mi pulvinar egestas.
                                            Libero ut nisi mauris sed.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="coming-soon.html">
                                <div class="activitie-card right">
                                    <div class="card-content d-sm-block d-none">
                                        <h5 class="h-31 mb-32 card-title">Horse Ride</h5>
                                        <p>Consistency is key, and this place nails it every time. Whether it's a
                                            quick lunch or a late-night snack, the quality is consistently.</p>
                                    </div>
                                    <div class="card-image">
                                        <img src="./assets/media/card-image/image-11.png" alt="">
                                    </div>
                                    <div class="card-content d-sm-none d-block">
                                        <h5 class="h-31 mb-32 card-title">Horse Ride</h5>
                                        <p>Consistency is key, and this place nails it every time. Whether it's a
                                            quick lunch or a late-night snack, the quality is consistently.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="amenities">
                        <div class="amenities-slider">
                            <div class="slider-slide top">
                                <img src="./assets/media/vector-shape/top-left.png" class="shape left-shape"
                                     alt="">
                                <img src="./assets/media/vector-shape/top-right.png" class="shape right-shape"
                                     alt="">
                                <img src="./assets/media/icon/washroom.png" class="icon mb-16" alt="">
                                <h6 class="h-24 light-black">LARGE BATHROOM</h6>
                            </div>
                            <div class="slider-slide bottom">

                                <img src="./assets/media/vector-shape/bottom-left.png" class="shape left-shape"
                                     alt="">
                                <img src="./assets/media/vector-shape/bottom-right.png" class="shape right-shape"
                                     alt="">
                                <img src="./assets/media/icon/wiFi.png" class="icon mb-16" alt="">
                                <h6 class="h-24 light-black">HIGH SPEED WIFI</h6>
                            </div>
                            <div class="slider-slide top">

                                <img src="./assets/media/vector-shape/top-left.png" class="shape left-shape"
                                     alt="">
                                <img src="./assets/media/vector-shape/top-right.png" class="shape right-shape"
                                     alt="">
                                <img src="./assets/media/icon/sea.png" class="icon mb-16" alt="">
                                <h6 class="h-24 light-black">AIR CONDITION</h6>
                            </div>
                            <div class="slider-slide bottom">

                                <img src="./assets/media/vector-shape/bottom-left.png" class="shape left-shape"
                                     alt="">
                                <img src="./assets/media/vector-shape/bottom-right.png" class="shape right-shape"
                                     alt="">
                                <img src="./assets/media/icon/parking.png" class="icon mb-16" alt="">
                                <h6 class="h-24 light-black">FREE PARKING</h6>
                            </div>
                            <div class="slider-slide top">

                                <img src="./assets/media/vector-shape/top-left.png" class="shape left-shape"
                                     alt="">
                                <img src="./assets/media/vector-shape/top-right.png" class="shape right-shape"
                                     alt="">
                                <img src="./assets/media/icon/pets.png" class="icon mb-16" alt="">
                                <h6 class="h-24 light-black">PETS ALLOWED</h6>
                            </div>
                            <div class="slider-slide bottom">
                                <img src="./assets/media/vector-shape/bottom-left.png" class="shape left-shape"
                                     alt="">
                                <img src="./assets/media/vector-shape/bottom-right.png" class="shape right-shape"
                                     alt="">
                                <img src="./assets/media/icon/washing-machine.png" class="icon mb-16" alt="">
                                <h6 class="h-24 light-black">WASHING</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="amenities-shape text-end">
                    <img src="./assets/media/vector-shape/activities-vec.png" alt="">
                </div>
            </div>
        </section>
        <!-- Activities Section End -->

        <!-- Testimonial Section Start -->
        <section class="testimonial" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                 data-sal-easing="ease-in-out">
            <div class="container-fluid">
                <div class="sec-heading right-2 text-start">
                    <div class="heading-content">
                        <p class="h-18 bold light-black justify-content-start  sec-text">TESTIMONIALS</p>
                        <h2 class="h-69 light-black satisfied-customer">Satisfied Customers</h2>
                    </div>
                    <div class="slider-arrow">
                        <button class="arrow prev-btn" data-slide="testimonial-slider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                 viewbox="0 0 33 32" fill="none">
                                <path
                                    d="M12.8057 23C12.8057 20 10.0057 16 6.80566 16M6.80566 16C8.639 16 12.8057 15 12.8057 9M6.80566 16H25.8057"
                                    stroke="#1B1918" stroke-width="2"></path>
                            </svg>
                        </button>
                        <button class="arrow next-btn" data-slide="testimonial-slider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                 viewbox="0 0 32 32" fill="none">
                                <path
                                    d="M19.3545 23C19.3545 20 22.1545 16 25.3545 16M25.3545 16C23.5212 16 19.3545 15 19.3545 9M25.3545 16H6.35449"
                                    stroke="#1B1918" stroke-width="2"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="content">
                    <div class="testimonial-slider sliders" data-parent="testimonial">
                        <div class="slider-slide">
                            <p class="h-16 mb-32">"Consistency is key, and this place nails it every time. Whether
                                it's a quick lunch or a late-night snack, the quality is consistently.</p>
                            <div class="user-detail mb-32">
                                <img src="./assets/media/user/1.png" alt="">
                                <div class="name">
                                    <h6 class="h-24 mb-8 light-black">Sarah Johnson</h6>
                                    <p class="h-16 light-black">U.S.A</p>
                                </div>
                            </div>
                            <div class="room">
                                <img src="./assets/media/card-image/image-12.png" alt="">
                                <div class="info">
                                    <div class="text">
                                        <h6 class="h-24 white mb-8"> Luxury Suit</h6>
                                        <p class="h-16 white">
                                            <span>
                                                (93) REVIEWS
                                            </span>
                                            <span>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                            </span>
                                        </p>

                                    </div>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 33 33" fill="none">
                                            <path
                                                d="M21.2334 18.3228C19.7334 16.8228 19.1334 13.4228 20.7334 11.8228M20.7334 11.8228C19.8167 12.7394 17.2334 14.3228 14.2334 11.3228M20.7334 11.8228L11.2334 21.3228"
                                                stroke="#FCFDFD" stroke-width="1.41421"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-slide">
                            <p class="h-16 mb-32">"Consistency is key, and this place nails it every time. Whether
                                it's a quick lunch or a late-night snack, the quality is consistently.</p>
                            <div class="user-detail mb-32">
                                <img src="./assets/media/user/2.png" alt="">
                                <div class="name">
                                    <h6 class="h-24 mb-8 light-black">Brian Clark</h6>
                                    <p class="h-16 light-black">Canada</p>
                                </div>
                            </div>
                            <div class="room">
                                <img src="./assets/media/card-image/image-13.png" alt="">
                                <div class="info">
                                    <div class="text">
                                        <h6 class="h-24 white mb-8"> Queen Room</h6>
                                        <p class="h-16 white">
                                            <span>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                            </span>
                                            <span>
                                                (93) REVIEWS
                                            </span>
                                        </p>

                                    </div>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 33 33" fill="none">
                                            <path
                                                d="M21.2334 18.3228C19.7334 16.8228 19.1334 13.4228 20.7334 11.8228M20.7334 11.8228C19.8167 12.7394 17.2334 14.3228 14.2334 11.3228M20.7334 11.8228L11.2334 21.3228"
                                                stroke="#FCFDFD" stroke-width="1.41421"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-slide">
                            <p class="h-16 mb-32">"Consistency is key, and this place nails it every time. Whether
                                it's a quick lunch or a late-night snack, the quality is consistently.</p>
                            <div class="user-detail mb-32">
                                <img src="./assets/media/user/3.png" alt="">
                                <div class="name">
                                    <h6 class="h-24 mb-8 light-black">Megan Robinson</h6>
                                    <p class="h-16 light-black">Australia</p>
                                </div>
                            </div>
                            <div class="room">
                                <img src="./assets/media/card-image/image-14.png" alt="">
                                <div class="info">
                                    <div class="text">
                                        <h6 class="h-24 white mb-8">Family Room</h6>
                                        <p class="h-16 white">
                                            <span>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                            </span>
                                            <span>
                                                (93) REVIEWS
                                            </span>
                                        </p>

                                    </div>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 33 33" fill="none">
                                            <path
                                                d="M21.2334 18.3228C19.7334 16.8228 19.1334 13.4228 20.7334 11.8228M20.7334 11.8228C19.8167 12.7394 17.2334 14.3228 14.2334 11.3228M20.7334 11.8228L11.2334 21.3228"
                                                stroke="#FCFDFD" stroke-width="1.41421"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-slide">
                            <p class="h-16 mb-32">"Consistency is key, and this place nails it every time. Whether
                                it's a quick lunch or a late-night snack, the quality is consistently.</p>
                            <div class="user-detail mb-32">
                                <img src="./assets/media/user/4.png" alt="">
                                <div class="name">
                                    <h6 class="h-24 mb-8 light-black">Jonathan Hall</h6>
                                    <p class="light-black">United Kingdom</p>
                                </div>
                            </div>
                            <div class="room">
                                <img src="./assets/media/card-image/image-15.png" alt="">
                                <div class="info">
                                    <div class="text">
                                        <h6 class="h-24 white mb-8"> Luxury Suit</h6>
                                        <p class="h-16 white">
                                            <span>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                            </span>
                                            <span>
                                                (93) REVIEWS
                                            </span>
                                        </p>

                                    </div>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 33 33" fill="none">
                                            <path
                                                d="M21.2334 18.3228C19.7334 16.8228 19.1334 13.4228 20.7334 11.8228M20.7334 11.8228C19.8167 12.7394 17.2334 14.3228 14.2334 11.3228M20.7334 11.8228L11.2334 21.3228"
                                                stroke="#FCFDFD" stroke-width="1.41421"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-slide">
                            <p class="h-16 mb-32">"Consistency is key, and this place nails it every time. Whether
                                it's a quick lunch or a late-night snack, the quality is consistently.</p>
                            <div class="user-detail mb-32">
                                <img src="./assets/media/user/1.png" alt="">
                                <div class="name">
                                    <h6 class="h-24 mb-8 light-black">Sarah Johnson</h6>
                                    <p class="h-16 light-black">U.S.A</p>
                                </div>
                            </div>
                            <div class="room">
                                <img src="./assets/media/card-image/image-12.png" alt="">
                                <div class="info">
                                    <div class="text">
                                        <h6 class="h-24 white mb-8"> Luxury Suit</h6>
                                        <p class="h-16 white">
                                            <span>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                                <i class="fa-solid fa-star-sharp white"></i>
                                            </span>
                                            <span>
                                                (93) REVIEWS
                                            </span>
                                        </p>

                                    </div>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 33 33" fill="none">
                                            <path
                                                d="M21.2334 18.3228C19.7334 16.8228 19.1334 13.4228 20.7334 11.8228M20.7334 11.8228C19.8167 12.7394 17.2334 14.3228 14.2334 11.3228M20.7334 11.8228L11.2334 21.3228"
                                                stroke="#FCFDFD" stroke-width="1.41421"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bottom-shape text-end">
                    <img src="./assets/media/bg-shape/right-corner-shape.png" alt="">
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Gallery Section Start -->
        <section class="gallery" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                 data-sal-easing="ease-in-out">
            <div class="container-fluid">
                <div class="sec-heading sec-2 text-start">
                    <div class="heading-content">
                        <p class="h-18 bold light-black justify-content-start text-uppercase sec-text">Gallery</p>
                        <h2 class="h-69 light-black local-activities">Interior Gallery</h2>
                    </div>
                </div>
                <div class="content">
                    <div class="image-container mb-40">
                        <img src="./assets/media/gallery/1.png" class="" alt="">
                    </div>
                    <div class="imag-card">
                        <div class="images">
                            <div class="gallery-img">
                                <img src="./assets/media/gallery/2.png" class="" alt="">
                            </div>
                            <div class="gallery-img">
                                <img src="./assets/media/gallery/3.png" class="" alt="">
                            </div>
                            <div class="gallery-img">
                                <img src="./assets/media/gallery/4.png" class="" alt="">
                            </div>
                        </div>
                        <div class="images">
                            <div class="gallery-img">
                                <img src="./assets/media/gallery/5.png" class="" alt="">
                            </div>
                            <div class="gallery-img">
                                <img src="./assets/media/gallery/6.png" class="" alt="">
                            </div>
                            <div class="gallery-img">
                                <img src="./assets/media/gallery/7.png" class="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bottom-shape center text-end">
                        <img src="./assets/media/bg-shape/footer-bg-shape.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section End -->
    </div>
</x-layouts.frontend>
