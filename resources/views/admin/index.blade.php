@extends('admin/layout')

@section('head')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title}}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon2.png')}}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />

    <!-- Aos Animation Css -->
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

    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
@endsection

@section('content')
<div class="container content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            @if (session()->has('error'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
            @endif
            {{-- yung widgets sa taas --}}
            <div class="row row-cols-1">
                <div class="overflow-hidden d-slider1 ">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div class="progress-detail">
                                        <p class="mb-2">Events</p>
                                        <h4 class="counter">{{ $bookings->count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                            <div class="card-body">
                                <div class="progress-widget">

                                    <div class="progress-detail">
                                        <p class="mb-2">Clients</p>
                                        <h4 class="counter">{{ $clients->count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                            <div class="card-body">
                                <div class="progress-widget">

                                    <div class="progress-detail">
                                        <p class="mb-2">Employees</p>
                                        <h4 class="counter">{{ $employees->count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                            <div class="card-body">
                                <div class="progress-widget">

                                    <div class="progress-detail">
                                        <p class="mb-2">Branches</p>
                                        <h4 class="counter">{{ $branches->count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                            <div class="card-body">
                                <div class="progress-widget">

                                    <div class="progress-detail">
                                        <p class="mb-2">Inventory</p>
                                        <h4 class="counter">{{ $inventory->count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div class="progress-detail">
                                        <p class="mb-2">Albums</p>
                                        <h4 class="counter">{{ $albums->count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="row">

                {{-- yung chart ng per month --}}
                <div class="col-md-12">
                    <div class="card" data-aos="fade-up" data-aos-delay="800">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4 class="card-title">Bookings {{ date('Y') }} </h4>
                            </div>
                            <div class="d-flex align-items-center align-self-center">
                                <div class="d-flex align-items-center text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                        fill="#4bc7d2">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary"># of bookings</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="d-main" class="d-main"></div>
                        </div>
                    </div>
                </div>

                {{-- circle chart --}}
                {{-- <div class="col-md-12 col-xl-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="900">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Earnings</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex-wrap d-flex align-items-center justify-content-between">
                                <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                <div class="d-grid gap col-md-4 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14"
                                            viewBox="0 0 24 24" fill="#3a57e8">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                            </g>
                                        </svg>
                                        <div class="ms-3">
                                            <span class="text-secondary">Fashion</span>
                                            <h6>251K</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14"
                                            viewBox="0 0 24 24" fill="#4bc7d2">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                            </g>
                                        </svg>
                                        <div class="ms-3">
                                            <span class="text-secondary">Accessories</span>
                                            <h6>176K</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- bar graph --}}
                {{-- <div class="col-md-12 col-xl-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="1000">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Conversions</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton3"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="d-activity" class="d-activity"></div>
                        </div>
                    </div>
                </div> --}}

                {{-- Upcoming events clients table --}}
                <div class="col-lg-12 col-lg-12">
                    <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="mb-2 card-title">Upcoming Events</h4>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="mt-4 table-responsive">
                                <table id="basic-table" class="table mb-0 " role="grid">
                                    <thead>
                                        <tr>
                                            <th>Event</th>
                                            <th>Assigned</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($upcomingvents as $upcomingvent)
                                        <tr>
                                            <td>
                                                {{ $upcomingvent->name }}
                                            </td>
                                            <td>
                                                <div class="iq-media-group iq-media-group-1 d-flex">
                                                    @foreach ($bookingEmployees->where('booking_id', '=',
                                                    $upcomingvent->id)
                                                    as $bookingEmployee)
                                                    <img src="{{ asset('storage/' . App\Models\Employee::find($bookingEmployee->employee_id)->pfp) }}"
                                                        alt="" class="img-fluid avatar-40 avatar-rounded shadow"
                                                        style="margin:-8px;">
                                                    @endforeach
                                                </div>

                                            </td>
                                            <td>

                                                {{ \Carbon\Carbon::parse($upcomingvent->date_start )->format('M d') }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- top clients table --}}
                <div class="col-lg-12 col-lg-12">
                    <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="mb-2 card-title">Top Clients</h4>
                                <p class="mb-0">
                                    <svg class="me-2 text-primary" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                    </svg>
                                    {{ $newclients }} new Client this month
                                </p>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="mt-4 table-responsive">
                                <table id="basic-table" class="table mb-0 " role="grid">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th># of Bookings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($topclients as $topclient)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                        src="{{ asset('storage/' . $topclient->pfp) }}"" alt=" profile">
                                                    <h6>{{ $topclient->name }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <div class="icon iq-icon-box-3 rounded-pill">{{ $topclient->contact
                                                        }}</div>
                                                </div>
                                            </td>
                                            <td>{{ $topclient->total }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- activity log --}}
        <div class="col-md-4 col-lg-4">
            <div class="card" data-aos="fade-up" data-aos-delay="600">
                <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="mb-2 card-title">Activity overview</h4>

                    </div>
                </div>
                <div class="card-body">
                    @foreach ($logs as $log)
                    <div class="mb-2  d-flex profile-media align-items-top">
                        <div class="mt-1 profile-dots-pills border-primary"></div>
                        <div class="ms-4">
                            <h6 class="mb-1 ">{{ $log->name }}</h6>
                            <span class="mb-0">{{ $log->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('scripts')
<!-- Library Bundle Script -->
<script src="{{asset('assets/js/core/libs.min.js')}}"></script>

<!-- External Library Bundle Script -->
<script src="{{asset('assets/js/core/external.min.js')}}"></script>

<!-- Widgetchart Script -->
<script src=" {{asset('assets/js/charts/widgetcharts.js')}}"></script>

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

{{-- bookings by month --}}
<script>
    var bookingsArr  = @json($bookingsArr);
    var monthsArr  = @json($monthsArr);
    if (document.querySelectorAll('#d-main').length) {
    const options = {
        series: [{
            name: 'Bookings',
            data:bookingsArr
        }],
        chart: {
            fontFamily: '"Inter", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
            height: 245,
            type: 'area',
            toolbar: {
                show: false
            },
            sparkline: {
                enabled: false,
            },
        },
        colors: [ "#4bc7d2"],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        yaxis: {
            show: true,
            labels: {
            show: true,
            minWidth: 19,
            maxWidth: 19,
            style: {
                colors: "#8A92A6",
            },
            offsetX: -5,
            },
        },
        legend: {
            show: false,
        },
        xaxis: {
            labels: {
                minHeight:22,
                maxHeight:22,
                show: true,
                style: {
                    colors: "#8A92A6",
                },
            },
            lines: {
                show: false  //or just here to disable only x axis grids
            },
            categories: monthsArr
        },
        grid: {
            show: false,
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: "vertical",
                shadeIntensity: 0,
                gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
                inverseColors: true,
                opacityFrom: .4,
                opacityTo: .1,
                stops: [0, 50, 80],
                colors: ["#3a57e8", "#4bc7d2"]
            }
        },
        tooltip: {
            enabled: true,
        },
    };

    const chart = new ApexCharts(document.querySelector("#d-main"), options);
    chart.render();
    document.addEventListener('ColorChange', (e) => {
        console.log(e)
        const newOpt = {
        colors: [e.detail.detail1, e.detail.detail2],
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: "vertical",
                shadeIntensity: 0,
                gradientToColors: [e.detail.detail1, e.detail.detail2], // optional, if not defined - uses the shades of same color in series
                inverseColors: true,
                opacityFrom: .4,
                opacityTo: .1,
                stops: [0, 50, 60],
                colors: [e.detail.detail1, e.detail.detail2],
            }
        },
    }
        chart.updateOptions(newOpt)
    })
}
</script>
@endsection