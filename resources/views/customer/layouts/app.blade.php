<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Travela - Tourism Website Template')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('customer/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('customer/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Bootstrap & Template CSS -->
    <link href="{{ asset('customer/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('customer/css/style.css') }}" rel="stylesheet">
</head>
<body>

    {{-- Header --}}


    {{-- Main content --}}
    @yield('content')

    {{-- Footer --}}
    @include('customer.includes.footer')


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('customer/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('customer/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('customer/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('customer/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('customer/js/main.js') }}"></script>
</body>
</html>
