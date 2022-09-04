@extends('admin/layout')

@section('head')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calendar</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon2.png')}}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/choiceJS/style/choices.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=1.2.0')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=1.2.0')}}" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}" />

    <!-- Fullcalender CSS -->
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/core/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/daygrid/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/timegrid/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/list/main.css')}}" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assetcalendar/css/appointment.min.css')}}" />
</head>
@endsection

@section('content')
<div class="container content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                                <div class="card-title mb-0">
                                    <h4 class="mb-0">Book Appointment</h4>
                                </div>
                                <div class="card-action mt-2 mt-sm-0">
                                    <a href="#" class="btn btn-primary" role="button">Back</a>
                                    <button type="button" class="btn btn-primary ms-2 mt-2 mt-sm-0"
                                        data-bs-toggle="modal" data-bs-target="#add-appointment">
                                        <svg class="icon-20" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                        <span>Book Appointment</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-admin-calendar-add />
            <x-admin-calendar-edit />

            <div class="container calendar-s">
                <div class="card">
                    <div class="card-body" id="bookingcalendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Library Bundle Script -->

<script src="{{asset('assets/js/core/libs.min.js')}}"></script>


<!-- Flatpickr Script -->
<script src="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/flatpickr.js')}}" defer></script>

<!-- External Library Bundle Script -->
<script src="{{asset('assets/js/core/external.min.js')}}"></script>

<!-- fslightbox Script -->
<script src="{{asset('assets/js/plugins/fslightbox.js')}}"></script>

<!-- Settings Script -->
<script src="{{asset('assets/js/plugins/setting.js')}}"></script>

<!-- Choisejs Script -->
<script src="{{asset('assets/vendor/choiceJS/script/choices.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/choice.js')}}" defer></script>


<!-- Lodash Utility -->
<script src="{{asset('assets/vendor/lodash/lodash.min.js')}}"></script>
<!-- Utilities Functions -->
<script src=" {{asset('assets/js/iqonic-script/utility.min.js')}}"></script>
<!-- Settings Script -->
<script src="{{asset('assets/js/iqonic-script/setting.min.js')}}"></script>
<!-- Settings Init Script -->
<script src=" {{asset('assets/js/setting-init.js')}}"></script>
<!-- External Library Bundle Script -->
<script src="{{asset('assets/js/core/external.min.js')}}"></script>
<!-- Widgetchart Script -->
<script src=" {{asset('assets/js/charts/widgetcharts.js?v=1.1.3')}}" defer></script>
<!-- Dashboard Script -->
<script src="{{asset('assets/js/charts/dashboard.js?v=1.1.3')}}" defer></script>
<!-- Hopeui Script -->
<script src=" {{asset('assets/js/hope-ui.js?v=1.1.3')}}" defer></script>
<script src="{{asset('assets/js/hope-uipro.js?v=1.1.3')}}" defer></script>


<!-- Fullcalender Javascript -->
<script src="{{asset('assets/js/plugins/bookappointment.js')}}"></script>
<script src="{{asset('assets/vendor/fullcalendar/core/main.js')}}"></script>
<script src="{{asset('assets/vendor/fullcalendar/daygrid/main.js')}}"></script>
<script src="{{asset('assets/vendor/fullcalendar/timegrid/main.js')}}"></script>
<script src="{{asset('assets/vendor/fullcalendar/list/main.js')}}"></script>
<script src="{{asset('assets/vendor/fullcalendar/interaction/main.js')}}"></script>
<script src="{{asset('assets/vendor/moment.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/calender.js')}}"></script>

<!-- App Script -->
<script src="{{asset('assets/js/hope-ui.js')}}"></script>
@endsection