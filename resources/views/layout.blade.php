<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

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

    <!-- Google fonts Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                Photo City
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/service">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/project">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>

                <a href="contact.html" class="btn btn-solid-border d-none d-lg-block">Get an estimate <i class="fa fa-angle-right ml-2"></i></a>
            </div>
        </div>
    </nav>

    {{-- view --}}

    @yield('content')


    {{-- footer Start --}}
    <footer class="footer section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <h3>Photocity</h3>
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-4">Company</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-4">Support</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-4">Get in Touch</h4>
                        <h6><a href="tel:+23-345-67890"> <i class="ti-headphone-alt mr-3"></i>Support@megakit.com</a></h6>
                        <h6><a href="mailto:support@gmail.com"> <i class="ti-mobile mr-3"></i>+23-456-6588</a></h6>

                        <ul class="list-inline footer-socials mt-5">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright Reserved to <span class="text-color">Photocity</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    {{-- Essential Scripts --}}

    <!-- Main jQuery -->
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>

    <!-- Bootstrap 4.3.2 -->
    <script src="{{asset('plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>