@extends('components.layouts.frontend')
@section('main')

    <main>
        <div class="pattern-square"></div>
        <!--Back to page start-->
        <section class="py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="events.html" class="text-reset icon-link icon-link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-arrow-left" viewbox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                            </svg>
                            back to events
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Back to page end-->

        <!--Digital experience start-->
        <section class="mb-xl-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-6">
                            <h1 class="mb-0">{{$room->title}}</h1>
                        </div>
                    </div>
                </div>
                @php
                    $images = $room->getMedia('room-images');
                @endphp
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="col-12">
                            <div
                                class="swiper-container swiper"
                                id="swiper-2"
                                data-pagination-type=""
                                data-speed="400"
                                data-space-between="100"
                                data-pagination="true"
                                data-navigation="false"
                                data-autoplay="true"
                                data-autoplay-delay="2000"
                                data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                                <div class="swiper-wrapper pb-6">
                                    @foreach($images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{$image->getUrl()}}" alt="project" class="img-fluid rounded-3"/>
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
                    <div class="col-lg-3 offset-lg-1 col-md-12">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 order-2">
                        <div class="mb-6 mt-4">
                            <h2 class="mb-4">About</h2>
                            <p class="mb-3">
                                {!! $room->description !!}</p>
                        </div>

                    </div>
                    <div class="col-lg-12  col-md-12 order-lg-2">

                        @auth
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="mb-6 text-center">
                                        <h3 class="mb-0">Book</h3>
                                    </div>
                                    <form action="{{route('bookingAll', [app()->getLocale()])}}" method="POST" class="row g-3 needs-validation" novalidate="">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="arrivalDate" class="form-label">Kelish sanasi</label>
                                            <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control input-date-formatting"
                                                   id="arrivalDate" placeholder="YYYY-MM-DD" required/>
                                            @error('start_date')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="departureDate" class="form-label">Chiqish sanasi</label>
                                            <input type="date" name="end_date" value="{{old('end_date')}}" class="form-control input-date-formatting"
                                                   id="departureDate"
                                                   placeholder="YYYY-MM-DD" required/>
                                            @error('end_date')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Room</label>
                                            <span class="form-control-plaintext">{{$room->title}}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="adults">Adults</label>
                                            <input type="number"  name="adults" id="adults" class="form-control" min="1"
                                                   placeholder="1" value="{{old('adults') ?? 1}}">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="children">Children</label>
                                            <input type="number" name="children" id="children" class="form-control" placeholder="0"
                                                   min="0" value="{{old('children') ?? 0}}">
                                        </div>

                                        <div id="error-message" class="text-danger" style="display: none;">
                                            Yig'indi xonada mavjud bo'lgan yotoqlar sonidan oshib ketmasligi kerak.
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type" value="1"
                                                       id="guestCheckbox" >
                                                <label class="form-check-label" for="guestCheckbox">
                                                    Mehmonlar uchun
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>

                                        <div id="guestFields" style="display: none;">
                                            <div class="row">
                                                @foreach(range(1, $room->bed_qty) as $index)
                                                    <div class="col-md-6">
                                                        <label class="form-label" for="guest_name_{{ $index }}">Ismi {{$index}}</label>
                                                        <input type="text" class="form-control"
                                                               id="guest_name_{{ $index }}"
                                                               name="name[{{ $index }}]"
                                                               placeholder="Ismi va familiyasi" value="{{ old('name.' . $index) }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label" for="guest_age_{{ $index }}">Yoshi {{$index}}</label>
                                                        <input type="number" class="form-control"
                                                               id="guest_age_{{ $index }}"
                                                               name="age[{{ $index }}]" min="1"
                                                               placeholder="Yoshini kiriting" value="{{ old('age.' . $index) }}">
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label"><span>Total price</span></label>
                                            <span class="form-control-plaintext" id="totalPrice">0</span>
                                        </div>
                                        <div class="col-md-4 mt-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Borganda To'lash
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDef" >
                                                <label class="form-check-label"  for="flexCheckDef">
                                                    Kartadan to'lash
                                                </label>
                                            </div>

                                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-header">
                                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                             preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                            <rect width="100%" height="100%" fill="var(--bs-primary)"></rect>
                                                        </svg>
                                                        <strong class="me-auto">Bu funksiya yaqinda qo'shiladi</strong>
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Bu funksiya tez orada qo'shiladi.
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="number" hidden name="day" id="dayInput" >
                                            <input type="number" hidden name="total_amount" id="TotalAmount" >
                                            <input type="number" hidden name="room_id" value="{{$room->id}}">
                                            <input type="number" hidden name="user_id" value="{{auth()->user()->id}}">

                                            <script>
                                                document.getElementById('flexCheckDef').addEventListener('click', function (e) {
                                                    // Belgilashni oldini olish
                                                    e.preventDefault();

                                                    // Toastni ko‘rsatish
                                                    const toastElement = document.getElementById('liveToast');
                                                    const toast = new bootstrap.Toast(toastElement);
                                                    toast.show();
                                                });
                                            </script>

                                        </div>
                                        <div class="col-md-4 mt-8">
                                        <button type="submit" class="btn btn-outline-info">Buyurtma berish</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        @else
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="mb-6 text-center">
                                        <h3 class="mb-0">Register</h3>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate="" action="{{route('roomDetailForm', app()->getLocale())}}" method="POST">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="eventSingleNameInput" class="form-label">
                                                First Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="name" class="form-control" id="eventSingleNameInput"
                                                   required="">
                                            <div class="invalid-feedback">Please enter  name.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone number</label>
                                            <input type="text" name="phone" class="form-control input-phone" id="phone" placeholder="+998XX XXX XXXX" required="" />
                                            <div class="invalid-feedback">Please enter phone.</div>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="eventSingleEmailInput" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control" id="eventSingleEmailInput"
                                                   required="">
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="formSignUpPassword" class="form-label">Password</label>
                                            <div class="password-field position-relative">
                                                <input name="password" type="password" class="form-control fakePassword" id="formSignUpPassword" required="">
                                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                                <div class="invalid-feedback">Please enter password.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="blockCheck"
                                                       required="">
                                                <label class="form-check-label ms-2 fs-6" for="blockCheck">
                                                    By continuing, you agree to Black
                                                    <a href="#">Terms of Use</a>
                                                    Read our
                                                    <a href="#">Privacy Policy</a>
                                                </label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endauth

                    </div>
                </div>
            </div>
        </section>
        <!--Digital experience end-->

    </main>
    <script>



        document.getElementById('guestCheckbox').addEventListener('change', function () {
            var guestFields = document.getElementById('guestFields');

            if (this.checked) {
                guestFields.style.display = 'block';
            } else {
                guestFields.style.display = 'none';
            }
        });
        document.addEventListener("DOMContentLoaded", () => {
            const roomPrice = {{$room->price}}; // PHP orqali narxni olamiz
            const arrivalInput = document.getElementById("arrivalDate");
            const departureInput = document.getElementById("departureDate");
            const totalPriceSpan = document.getElementById("totalPrice");

            function calculateTotalPrice() {
                const arrivalDate = new Date(arrivalInput.value);
                const departureDate = new Date(departureInput.value);

                if (arrivalDate && departureDate && departureDate > arrivalDate) {
                    const differenceInTime = departureDate - arrivalDate;
                    const differenceInDays = Math.ceil(differenceInTime / (1000 * 60 * 60 * 24));
                    const totalPrice = differenceInDays * roomPrice;
                    totalPriceSpan.textContent = `${totalPrice} so'm`;
                    document.getElementById("dayInput").value = differenceInDays;
                    document.getElementById("TotalAmount").value = totalPrice;
                } else {
                    totalPriceSpan.textContent = "0 so'm";
                }
            }

            arrivalInput.addEventListener("input", calculateTotalPrice);
            departureInput.addEventListener("input", calculateTotalPrice);
        });


    </script>
@endsection
