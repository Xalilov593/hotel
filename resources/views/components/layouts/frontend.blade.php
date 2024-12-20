<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Luxury Hotel - Elevating Project Success with Cutting Edge Engineering Solutions and On-Time Precision">

    <title>Avloniy Hotel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/filament/favi.png')}}">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/css2')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/classic.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/classic.date.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/sal.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">

    <script src="{{ asset('assets/js/vendor/lottie.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/loader.js')}}"></script>
    <script async="" src="{{ asset('assets/js/gtag/js?id=UA-266165434-1')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-266165434-1');
    </script>
    <!-- Bootstrap CSS -->



</head>

<body id="body" class="x-hidden">


    <!--  Begin scroll container -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <x-header></x-header>
            {{ $slot }}
            <x-footer></x-footer>
        </div>
        <!-- End content wrap -->
    </div>
    <!-- End scroll container -->
    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js')}}"></script>

    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/scrollTrigger.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/ScrollToPlugin.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/ScrollSmoother.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/Flip.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-validator.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/picker.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/picker.date.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/slick-animation.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/sal.js')}}"></script>
    <script src="{{asset('assets/js/sdk.latest.js')}}"></script>

    <script src="{{ asset('assets/js/date.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script src="https://unpkg.com/splittype"></script>


</body>

</html>
