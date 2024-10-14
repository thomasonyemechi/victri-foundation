<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title') -  {{ env('APP_NAME') }} </title>

    <!-- Logo -->
    {{-- <link rel="shortcut icon" href="assets/img/faveicon.png" type="image/x-icon"> --}}

    <!-- Fontawsome -->
    <link rel="stylesheet" href="{{ asset('cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/Inter-VariableFont_slnt%2cwght.ttf') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->

    <!-- Navbar START -->
    @include('layout.nav')
    <!-- Navbar END -->
    @yield('page_content')

    <!-- Footer START -->
    @include('layout.footer')
    <!-- Footer END -->

    <!-- Jquary -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Venobox -->
    <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
    <!-- Counter JS -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Aos JS -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


    @stack('scripts')
</body>

</html>
