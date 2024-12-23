<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link href="{{asset('../assets/libs/prismjs/themes/prism-okaidia.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../assets/libs/swiper/swiper-bundle.min.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/images/favicon/block-safari-pinned-tab.svg')}}" color="#8b3dff">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#8b3dff">
    <meta name="msapplication-config" content="./assets/images/favicon/tile.xml">

    <!-- Color modes -->
    <script src="{{asset('assets/js/vendors/color-modes.js')}}"></script>

    <!-- Libs CSS -->
    <link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{asset('assets/libs/scrollcue/scrollCue.css')}}">

    <!-- Box icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/css/boxicons.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <!-- Analytics Code -->
    <script async="" src="gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kss8za9j58");

        document.addEventListener("DOMContentLoaded", function () {
            // Kelish sanasi
            flatpickr("#arrivalDate", {
                dateFormat: "Y-m-d",
                minDate: "today", // Hozirgi kundan boshlanadi
                onChange: function (selectedDates, dateStr, instance) {
                    // Chiqish sanasini kelish sanasidan keyin boshlanishini o'rnating
                    let departurePicker = flatpickr("#departureDate");
                    departurePicker.set("minDate", dateStr);
                },
                onReady: function () {
                    // Kalendar fon rangini o'zgartirish
                    let calendar = document.querySelector(".flatpickr-calendar");
                    if (calendar) {
                        calendar.style.backgroundColor = "#e2e8f0"; // Orqa fon rangi
                    }
                },
            });

            // Chiqish sanasi
            flatpickr("#departureDate", {
                dateFormat: "Y-m-d",
                minDate: "today", // Hozirgi kundan boshlanadi
                onReady: function () {
                    // Kalendar fon rangini o'zgartirish
                    let calendar = document.querySelector(".flatpickr-calendar");
                    if (calendar) {
                        calendar.style.backgroundColor = "#e2e8f0"; // Orqa fon rangi
                    }
                },
            });
        });

    </script>


    <title>Jamstack Agency - Responsive Website Template | Block</title>
</head>

<body>
@include('components.header')
@yield('main')
@include('components.footer')

<div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewbox="0 0 40 40">
        <path
            d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z"></path>
    </svg>
</div>
<!-- Libs JS -->
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/headhesive/dist/headhesive.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>

<script src="{{asset('assets/libs/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/jarallax.js')}}"></script>
<script src="{{asset('assets/libs/scrollcue/scrollCue.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/scrollcue.js')}}"></script>


<script src="{{asset('/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/vendors/swiper.js')}}"></script>

<script src="{{asset('assets/libs/parallax-js/dist/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/parallax.js')}}"></script>
</body>
</html>
