
<x-layouts.frontend>
<!-- Title Banner Start -->
<section class="title-banner">
    <div class="container-fluid">
        <div class="content">
            <div class="title-block">
                <div class="title">
                    <h2 class="h-69">Login</h2>
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

                    <div class="offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6">
                        <form action="{{ route('loginPost', ['lang' => app()->getLocale()]) }}" method="POST" class="mb-48">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-24">
                                        <input type="email" name="email" class="form-control" placeholder="email@example.com" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="password-block mb-24">
                                        <i class="fas fa-eye-slash" id="eye"></i>
                                        <input type="password" class="form-control password-input" name="password" placeholder="••••••••" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="filter-checkbox mb-32">
                                            <input type="checkbox" class="ui-checkbox" id="mycheckbox" name="mycheckbox">
                                            <label for="mycheckbox" class="h-18 dark-gray">Remember me</label>
                                        </div>
                                        <a href="" class="color-primary">Forget Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-secondary w-100 mb-32">Login</button>
                                </div>
                            </div>
                        </form>

                        <div class="text-start">
                            <p class="h-18 light-black">Don't have an account?<a href="{{route('register', app()->getLocale())}}" class="color-primary">&nbsp;Signup</a></p>
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
    <!-- Booking Section End -->
</div>

</x-layouts.frontend>
