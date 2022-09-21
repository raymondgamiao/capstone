<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo City</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon2.png')}}">

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/modal-video/modal-video.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate-css/animate.css')}}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.css')}}" />


    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body>

    <x-user-navbar />

    @yield('content')

    <x-user-footer />

    {{-- Essential Scripts --}}

    <!-- Main jQuery -->
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>

    <!-- Bootstrap 4.3.2 -->
    <script src="{{asset('plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>


    <!--  Magnific Popup-->
    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>

    <!-- Slick Slider -->
    <script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>

    <!-- Counterup -->
    <script src="{{asset('plugins/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('plugins/modal-video/modal-video.js')}}"></script>
    <!-- Google Map -->
    <script src="{{asset('plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>



    <script>
        function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
        }
    </script>



    <script src="{{asset('js/script.js')}}"></script>

    @yield('scripts')
</body>

</html>