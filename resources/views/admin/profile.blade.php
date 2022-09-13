@extends('admin/layout')

@section('head')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=1.2.0')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=1.2.0')}}" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/choiceJS/style/choices.min.css')}}" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}" />

</head>
@endsection

@section('content')
<div class="container content-inner mt-n5 py-0">
        <div>
            <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body text-center">
                      <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t1.6435-9/171785206_3390526557715046_3812550295121864105_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFwK6hWwQReBADxLFHPbNMHuGUaMnGk3JG4ZRoycaTckesM1ZaNNGJSdrXb4BbZwaBHNLZQFxtByPFEL-VLLp8R&_nc_ohc=Z5qvEtek6ywAX_JthJa&_nc_ht=scontent.fdvo2-2.fna&oh=00_AT9TmDG9BV7UdzFpc9quFd8bqXYVjK8Ittxmr3UuipXkAA&oe=6342CAC4" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3">Mondi Gamiao</h5>
                      <p class="text-muted mb-1">Full Stack Developer</p>
                      <p class="text-muted mb-4">Manila, California</p>
                      <div class="d-flex justify-content-center mb-2">
                        <a href="./editprofile.html">Edit Info</a>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                      <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="uil uil-twitter" style="color: #55acee;"></i>
                          <p class="mb-0">Twitter:mondi</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="uil uil-instagram-alt" style="color: #ac2bac;"></i>
                          <p class="mb-0">Insta:mondi</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="uil uil-facebook" style="color: #3b5998;"></i>
                          <p class="mb-0">fb:mondi</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">UserID</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">1</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">First Name</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Mondi</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Last Name</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Gamiao</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">User Type</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Admin</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Username</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">mondi__123</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Password</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">********</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Mobile Number</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">09436346634</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">mondi@gmail.com</p>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">SSS ID</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">2342356</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Phil Health ID</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">234123497</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Pag-Ibig ID</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">1231232</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Bank Account</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">0000000</p>
                            </div>
                          </div>
                          <hr>
                        </div>
                      </div>

@endsection

@section('scripts')
<!-- Library Bundle Script -->
<script src="{{asset('assets/js/core/libs.min.js')}}"></script>

<!-- External Library Bundle Script -->
<script src="{{asset('assets/js/core/external.min.js')}}"></script>

<!-- Widgetchart Script -->
<script src="{{asset('assets/js/charts/widgetcharts.js')}}"></script>

<!-- mapchart Script -->
<script src="{{asset('assets/js/charts/vectore-chart.js')}}"></script>
<script src="{{asset('assets/js/charts/dashboard.js')}}"></script>

<!-- fslightbox Script -->
<script src="{{asset('assets/js/plugins/fslightbox.js')}}"></script>

<!-- Settings Script -->
<script src="{{asset('assets/js/plugins/setting.js')}}"></script>

<!-- Slider-tab Script -->
<script src="{{asset('assets/js/plugins/slider-tabs.js')}}"></script>

<!-- Form Wizard Script -->
<script src="{{asset('assets/js/plugins/form-wizard.js')}}"></script>

<!-- AOS Animation Plugin-->
<script src="{{asset('assets/vendor/aos/dist/aos.js')}}"></script>

<!-- App Script -->
<script src="{{asset('assets/js/hope-ui.js')}}" defer></script>
@endsection