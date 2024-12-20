@php
$lang=app()->getLocale();
$contact=\App\Models\Contact::where('lang', $lang)->first();
 @endphp
<!-- Footer Section Start -->
<footer class="footer" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
    <div class="container-fluid">
        <div class="content text-center">
            <a href="" class="footer-logo">
                <img src="/css/filament/logo.png" alt="">
            </a>
            <div class="content-detail">
                <ul class="category category-1 unstyled d-sm-flex d-none">
                    <li>
                        <a href="{{ route('home')}}" class="h-24 fw-400 light-black"><span>{{__('main.home')}}</span></a>
                    </li>
                    <li>
                        <a href="{{ route('about')}}" class="h-24 fw-400 light-black"><span>{{__('main.About')}}</span></a>
                    </li>
                    <li>
                        <a href="{{ route('rooms', $lang)}}" class="h-24 fw-400 light-black"><span>{{__(('main.Rooms'))}}</span></a>
                    </li>
                    <li>
                        <a href="{{ route('services')}}" class="h-24 fw-400 light-black"><span>{{__('main.Services')}}</span></a>
                    </li>
                    <li>
                        <a href="{{ route('contact', $lang)}}" class="h-24 fw-400 light-black"><span>{{__('main.contact')}}</span></a>
                    </li>
                </ul>
                <div class="center-content">
                    <ul class="contact-list unstyled mb-32">
                        <li>
                            <div class="icon-detail"><i class="fa-regular fa-phone"></i>
                                <a href="tel:{{$contact->number_1}}" class="tooltip-text">{{$contact->number_1}}</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon-detail"><i class="fa-regular fa-envelope"></i>
                                <a href="mailto:{{$contact->email_1}}" class="tooltip-text">{{$contact->email_1}}</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon-detail"><i class="fa-regular fa-location-dot"></i>
                                <a href="{{$contact->map}}" class="tooltip-text">{{$contact->address}}</a>
                            </div>
                        </li>
                    </ul>
                    <div class="vr-line d-sm-block d-none"></div>
                    <form action="index.html">
                        <p class="h-31 light-black mb-24">Weekly Newsletter.</p>
                        <div class="subscribe-block">
                            <input type="email" name="email" id="email" placeholder="{{$contact->email_1}} ">
                            <button type="submit" class="cus-btn">Subscribe</button>
                        </div>
                    </form>
                </div>
                <ul class="category unstyled d-sm-flex d-none">
                    <li>
                        <a href="room-grid.html" class="h-24 fw-400 light-black"><span>Accommodation</span></a>
                    </li>
                    <li>
                        <a href="restaurant.html" class="h-24 fw-400 light-black"><span>Restaurant</span></a>
                    </li>
                    <li>
                        <a href="spa-relax.html" class="h-24 fw-400 light-black"><span>Spa and Wellness</span></a>
                    </li>
                    <li>
                        <a href="room-list.html" class="h-24 fw-400 light-black"><span>Our Rooms</span></a>
                    </li>
                </ul>
            </div>

            <div class="bottom-text">
                <p class="h-18 dark-gray">© 2024. All rights reserved by LUXE</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
