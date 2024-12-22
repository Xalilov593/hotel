<x-layouts.frontend>
    <!-- Title Banner Start -->
    <section class="title-banner">
        <div class="container-fluid">
            <div class="content room-banner">
                <div class="title-block">
                    <div class="title">
                        <h2 class="h-69">Room Detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Title Banner End -->

    <!-- Start Page Content -->
    <div class="page-content">

        <!-- Gallery Section Start -->
        <div class="gallery gallery-detail">
            <div class="container-fluid">
                <div class="content gallery-content">
                    <div class="image-container mb-40">
                        <img src="/assets/media/gallery/3.png" alt="">
                    </div>
                    <div class="images background-shape">
                        <div class="gallery-img">
                            <img src="/assets/media/gallery/1.png" class="image-1 image-v2" alt="">
                        </div>
                        <div class="gallery-img">
                            <img src="/assets/media/gallery/3.png" class="image-1 image-v2" alt="">
                        </div>
                        <div class="gallery-img">
                            <img src="/assets/media/gallery/4.png" class="image-1 image-v2" alt="">
                        </div>
                        <div class="gallery-img d-sm-block">
                            <img src="/assets/media/gallery/5.png" class="image-1 image-v2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Section End -->

        <!-- ROOM DETAIL START -->
        <section class="room-detail">
            <div class="container-fluid">
                <div class="room-detail-wrapper">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="room-content-wrapper">
                                <div class="price-title mb-32">
                                    <h3 class="h-53 light-black mb-16">{{$room->title}}</h3>
                                    <p><span class="color-primary h-40">{{intval($room->price).' '. __('main.Sum')}}</span>
                                        <span class="light-bold light-black">/Night</span>
                                    </p>
                                </div>
                                <p class="h-18 dark-gray font-sec mb-48">{{$room->description}}</p>
                                @php
                                    $icons = $room->types()->get();

                                @endphp
                                <div class="room-amenities mb-48">
                                    <h4 class="h-40 light-black mb-32">{{__('main.Services')}}</h4>
                                    <ul class="list-unstyled">
                                        @foreach($icons as $icon)
                                        <li class="h-18 light-black">
                                            <img style="max-width: 20%" src="{{$icon->getMedia('icon-image')->first()->getUrl()}}" alt="">
                                            {{$icon->value_name}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="review-area">
                                    <h4 class="h-40 light-black mb-32 rules-reg"> Reviews</h4>
                                    <div class="review-block mb-32">
                                        <div class="image-box">
                                            <img src="/assets/media/user/user-5.png" alt="">
                                        </div>
                                        <div class="text-box">
                                            <h6 class="h-18 font-sec light-black mb-8">Ethan Clarke</h6>
                                            <div class="rating-star mb-16">
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                            </div>
                                            <p class="h-18 font-sec dark-gray">Lorem ipsum dolor sit amet consectetur. Neque dictum gravida nunc euismod. Nulla
                                                dolor rutrum consectetur purus proin ut. Cras cursus nullam erat at aliquet luctus et purus urna.</p>
                                        </div>
                                    </div>
                                    <div class="review-block mb-32">
                                        <div class="image-box">
                                            <img src="/assets/media/user/user-6.png" alt="">
                                        </div>
                                        <div class="text-box">
                                            <h6 class="h-18 font-sec light-black mb-8">Sophia Reynolds</h6>
                                            <div class="rating-star mb-16">
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                                <i class="fa-solid fa-star-sharp color-primary"></i>
                                            </div>
                                            <p class="h-18 font-sec dark-gray">Lorem ipsum dolor sit amet consectetur. Neque dictum gravida nunc euismod. Nulla
                                                dolor rutrum consectetur purus proin ut. Cras cursus nullam erat at aliquet luctus et purus urna.</p>
                                        </div>
                                    </div>
                                    <h5 class="h-24 light-black mb-16 rules-reg">Add a review</h5>
                                    <p class="h-18 font-sec dark-gray mb-32">Your email address will not be published. Required fields are marked *</p>
                                    <form action="room-detail.html" method="post" class="form-group contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="message" id="comment" cols="30" rows="10" class="form-control mb-32" placeholder="Good Quality..."></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-32">
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-32">
                                                    <input type="email" id="mail" name="email" class="form-control" placeholder="email@example.com" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="cus-btn submit-button">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="room-detail-sidebar mt-xl-0 mt-24">
                                <form action="room-detail.html" method="get" class="mb-48">
                                    <div class="sidebar-title mb-32">
                                        <h4 class="h-31 fw-600 light-black bold-text">Book Your Room</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-16">
                                            <input type="text" id="f-name" name="name" class="form-control" placeholder="First Name" required="" value="{{auth()->user()->name ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-16">
                                            <input name="phone" class="form-control" id="phone-form-control"  placeholder="+998 (__) ___-__-__" type="tel" value="{{auth()->user()->phone ?? '+998'}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-16">
                                            <input type="email" id="e_mail" name="email" class="form-control" placeholder="email@example.com" required="" value="{{auth()->user()->email ??  ''}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-date-picker mb-16">
                                            <input type="text" class="date_from form-control" id="checkIn" placeholder="Kelish vaqti ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-date-picker mb-16">
                                            <input type="text" class="date_to form-control" id="check_In" placeholder="Ketish vaqti">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-date-picker mb-16">
                                            <input type="text" class="form-control" id="check_In" placeholder="Kunlar soni">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-date-picker mb-16">
                                            <input type="text" class="form-control" id="check_In" placeholder="Jami">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-24">
                                            <select name="type" class="has-nice-select form-control">
                                                <option value="0">O'zim uchun </option>
                                                <option value="1">Mehmon uchun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="cus-btn form-btn w-100">Check Availability</button>
                                </form>
                                <div class="sidebar-title mb-32">
                                    <h4 class="h-31 fw-600 light-black bold-text">Summer Offer</h4>
                                </div>
                                <div class="offer-block mb-16">
                                    <a href="offers.html"><img src="/assets/media/gallery/side-image-1.png" alt=""></a>
                                    <div>
                                        <h4 class="h-24 light-black mb-16"><a href="offers.html">Sun-kissed Stays</a></h4>
                                        <p class="h-18 dark-gray">From $220 / Per Night</p>
                                    </div>
                                </div>
                                <div class="offer-block mb-16">
                                    <a href="offers.html"><img src="/assets/media/gallery/side-image-2.png" alt=""></a>
                                    <div>
                                        <h4 class="h-24 light-black mb-16"><a href="offers.html">Warm Weather Getaway</a></h4>
                                        <p class="h-18 dark-gray">From $220 / Per Night</p>
                                    </div>
                                </div>
                                <div class="offer-block">
                                    <a href="offers.html"><img src="/assets/media/gallery/side-image-3.png" alt=""></a>
                                    <div>
                                        <h4 class="h-24 light-black mb-16"><a href="offers.html">Seasonal Serenity</a></h4>
                                        <p class="h-18 dark-gray">From $220 / Per Night</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-shape center text-end">
                            <img src="/assets/media/bg-shape/footer-bg-shape.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ROOM DETAIL END -->

        <script>
            document.getElementById("phone-form-control").addEventListener("input", function (event) {
                const phoneInput = event.target;

                // Faqat raqamlarni olib qolish
                let digits = phoneInput.value.replace(/\D/g, "");

                // Raqamlarning uzunligini cheklash (faqat 9 ta raqam)
                if (digits.startsWith("998")) {
                    digits = digits.slice(3); // "+998" ni saqlash
                } else {
                    digits = digits.replace(/^998/, ""); // Agar foydalanuvchi 998 ni noto'g'ri joylashtirsa
                }
                digits = digits.substring(0, 9); // Maksimal 9 ta raqam

                // Formatlash: "(98) 457-25-19"
                let formatted = "+998";
                if (digits.length > 0) {
                    formatted += ` (${digits.substring(0, 2)}`;
                }
                if (digits.length > 2) {
                    formatted += `) ${digits.substring(2, 5)}`;
                }
                if (digits.length > 5) {
                    formatted += `-${digits.substring(5, 7)}`;
                }
                if (digits.length > 7) {
                    formatted += `-${digits.substring(7, 9)}`;
                }

                // Formatni qo'llash
                phoneInput.value = formatted;
            });


        </script>

    </div>
</x-layouts.frontend>
