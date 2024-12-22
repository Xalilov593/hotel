<x-layouts.frontend>

    <!-- Title Banner Start -->
    <section class="title-banner">
        <div class="container-fluid">
            <div class="content">
                <div class="title-block">
                    <div class="title">
                        <h2 class="h-69">Register</h2>
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

                        <div class="offset-xl-2 col-xl-8">
                            <div class="booking-text mb-48">
                                <h3 class="h-31 light-black mb-16">Create Your Account</h3>
                                <p class="h-18 dark-gray">Join us today unlock exclusive offers and benefits.</p>
                            </div>
                            <form action="{{route('registerPost', app()->getLocale())}}" method="POST" class=" form-validate mb-48">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <input type="text" id="f-name" name="name" class="form-control"
                                                           placeholder="First Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <input type="email" id="e_mail" name="email" class="form-control"
                                                           placeholder="email@example.com" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-24">
                                                    <input name="phone" class="form-control" id="phone-form-control" placeholder="+998 (__) ___-__-__" type="tel" value="+998">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="password-block mb-24">
                                                    <i class="fas fa-eye-slash" id="eye"></i>
                                                    <input type="password" class="form-control password-input"
                                                           id="passWord" name="password" placeholder="••••••••"
                                                           required="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="cus-btn booking-btn w-100 mb-32">Register</button>
                                        <div class="text-end">
                                            <p class="h-18 light-black">Already have an account?<a href="{{route('login', app()->getLocale())}}"
                                                                                                   class="color-primary text-decoration-underline">&nbsp;Signin</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
</x-layouts.frontend>

