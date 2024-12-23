<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{asset('assets/libs/scrollcue/scrollCue.css')}}">

    <!-- Box icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/css/boxicons.min.css')}}">

    <!-- Theme CSS -->
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
    </script>

    <title>Sign In - Responsive Website Template | Block</title>
</head>

<body>
@yield('auth')
<!-- Libs JS -->
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/headhesive/dist/headhesive.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>

<script src="{{asset('assets/js/vendors/password.js')}}"></script>
</body>

</html>
