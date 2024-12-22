
<x-layouts.frontend>


    <!-- Title Banner Start -->
    <section class="title-banner">
        <div class="container-fluid">
            <div class="content">
                <div class="title-block">
                    <div class="title">
                        <h2 class="h-69">Booking Form</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Title Banner End -->

    <!-- Start Page Content -->
    <div class="page-content">

        <!-- Booking Section Start -->
        <section class="booking">
            <div class="container-fluid">
                <div class="booking-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="booking-image">
                                <img src="assets/media/card-image/booking-image.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="booking-text mb-48">
                                <h3 class="h-31 light-black mb-16">Personal Information</h3>
                                <p class="h-18 dark-gray">Share your essential details to complete your booking.</p>
                            </div>
                            <form action="booking.html" method="get" class="contact-form form-validate mb-48">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="col-md-12">
                                            <div class="mb-24">
                                                <input type="text" id="f-name" name="name" class="form-control" placeholder="First Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-24">
                                                <input type="email" id="e_mail" name="email" class="form-control" placeholder="email@example.com" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-24">
                                                <select name="select" class="has-nice-select form-control">
                                                    <option value="adults">Adults</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="repeater">
                                            <!-- Dinamik bo'limlar -->
                                            <div class="repeater-item mb-24">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <select name="rooms[0][room_id]" class="form-control" required>
                                                            <option value="">Select Room</option>
                                                            @foreach($rooms as $room)
                                                                <option value="{{ $room->id }}">{{ $room->bed_qty }}- kishilik xona</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select name="rooms[0][adults]" class="form-control" required>
                                                            <option value="">Kattalar</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select name="rooms[0][children]" class="form-control" required>
                                                            <option value="">Kichiklar</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-danger remove-item">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" id="add-repeater-item" class="btn btn-primary mt-4">+</button>
                                        </div>

                                            <div class="col-md-12">
                                            <div class="mb-24">
                                                <select name="select" class="has-nice-select form-control">
                                                    <option value="guest">Children</option>
                                                    <option value="one">1 </option>
                                                    <option value="two">2</option>
                                                    <option value="three">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-date-picker mb-24">
                                                <input type="text" class="date_from form-control" id="checkIn" placeholder="Check-in">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <input type="text" id="last-name" name="name" class="form-control" placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <select name="select" class="has-nice-select form-control">
                                                        <option value="room">Room</option>
                                                        <option value="queen">Queen Room</option>
                                                        <option value="double">Double Room</option>
                                                        <option value="deluxe">Deluxe Room</option>
                                                        <option value="family">Family Room</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <select name="select" class="has-nice-select form-control">
                                                        <option value="room">Room Type</option>
                                                        <option value="queen">Queen Room</option>
                                                        <option value="double">Double Room</option>
                                                        <option value="deluxe">Deluxe Room</option>
                                                        <option value="family">Family Room</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-date-picker mb-24">
                                                    <input type="text" class="date_to form-control" id="check_In" placeholder="Check-out">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" id="request" cols="30" rows="10" class="form-control mb-32" placeholder="Special Requests (Optional)"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="cus-btn booking-btn w-100">Book Now</button>
                            </form>
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
        <!-- Booking Section End -->
    </div>
    ,
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const repeater = document.getElementById('repeater');
            const addButton = document.getElementById('add-repeater-item');
            let index = 1; // Bo'lim indeksini boshqarish uchun

            // Yangi element qo'shish
            addButton.addEventListener('click', function () {
                const newItem = document.createElement('div');
                newItem.classList.add('repeater-item', 'mb-24');
                newItem.innerHTML = `
            <div class="row">
                <div class="col-md-4">
                    <select name="rooms[${index}][room_id]" class="form-control" required>
                        <option value="">Select Room</option>
                        @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <input type="number" name="rooms[${index}][adults]" class="form-control" placeholder="Adults" value="1" min="1" required>
                </div>
                <div class="col-md-4">
                    <input type="number" name="rooms[${index}][children]" class="form-control" placeholder="Children" value="0" min="0">
                </div>
            </div>
            <button type="button" class="btn btn-danger mt-2 remove-item">Remove</button>
        `;

                repeater.appendChild(newItem);
                index++;
            });

            // Element o'chirish
            repeater.addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-item')) {
                    e.target.closest('.repeater-item').remove();
                }
            });
        });

    </script>


</x-layouts.frontend>

