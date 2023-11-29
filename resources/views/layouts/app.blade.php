<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bitech">
    <meta name="keywords" content="dental, dao, dental clinic, clinic, dao dental clinic, akure, ondo,  ">

    <meta name="description"
        content="Welcome to Dao Dental Clinic, where your oral health and comfort are our top priorities. Established with a passion for delivering exceptional dental care, our clinic is dedicated to providing a positive and personalized experience for every patient">


    <title>{{ env('APP_NAME') }} | @yield('page_title') </title>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

</head>

<body class="page-wrapper">
    {{-- <div class="preloader"></div> --}}

    @include('layouts.inc.header')

    @yield('page_content')

    @include('layouts.inc.footer')

    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span>
    </div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
