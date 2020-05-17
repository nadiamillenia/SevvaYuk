<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Sevva Yuk is a e-commerce platform for anyone.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sevva Yuk</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <!-- Material Design Iconic Font -->
    <link rel="stylesheet" href="{{ asset('css/vendor/material-design-iconic-font.css') }}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ asset('css/vendor/simple-line-icons.css') }}">
    <!-- Local Font -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery-ui.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{ asset('css/plugins/timecircles.css') }}">

    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}"> -->
    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/plugins/plugins.min.css') }}"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="template-color-4 font-family-02">
    <div class="main-wrapper wrapper-boxed_layout">

        <div class="loading">
            <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
            </div>
        </div>

        @include('layouts.includes.header')

        @yield('content')

        @include('layouts.includes.footer')

        <a class="scroll-to-top" href=""><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery JS -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('js/plugins/slick.min.js') }}"></script>
    <!-- Barrating JS -->
    <script src="{{ asset('js/plugins/jquery.barrating.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('js/plugins/jquery.counterup.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('js/plugins/jquery.nice-select.js') }}"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('js/plugins/jquery.sticky-sidebar.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/plugins/jquery-ui.min.js') }}"></script>
    <!-- jQuery UI Touch Punch -->
    <script src="{{ asset('js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{ asset('js/plugins/theia-sticky-sidebar.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
    <!-- jQuery Zoom JS -->
    <script src="{{ asset('js/plugins/jquery.zoom.min.js') }}"></script>
    <!-- Timecircles JS -->
    <script src="{{ asset('js/plugins/timecircles.js') }}"></script>

    <!-- Vendor JS -->
    <!-- <script src="{{ asset('js/vendor/vendor.min.js') }}"></script> -->
    <!-- Plugins JS -->
    <!-- <script src="{{ asset('js/plugins/plugins.min.js') }}"></script> -->

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('extra-js')

</body>
</html>
