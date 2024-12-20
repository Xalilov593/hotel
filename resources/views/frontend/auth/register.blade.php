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
                            <form action="register.html" method="get" class="contact-form form-validate mb-48">
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
                                                    <input type="text" id="last-name" name="name" class="form-control"
                                                           placeholder="Last Name" required="">
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
                                            <p class="h-18 light-black">Already have an account?<a href="login.html"
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
</x-layouts.frontend>

