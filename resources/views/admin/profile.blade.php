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
            <img src="{{ asset('storage/' . Auth::user()->employee->first()->pfp) }}" alt=" avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ Auth::user()->employee->first()->name }}

            </h5>
            <p class="text-muted mb-1">{{ Auth::user()->employee->first()->role }}</p>
            <p class="text-muted mb-4">{{ Auth::user()->employee->first()->address }}</p>
            <div class="d-flex justify-content-center mb-2">
              <a href="{{ route('admin/editprofile') }}">Edit Info</a>
            </div>
          </div>
        </div>
        <div class="card mb-5 mb-lg-4">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="uil uil-twitter" style="color: #55acee;"></i>
                <p class="mb-0">Twitter:
                  {{
                  Auth::user()->employee->first()->twitter !== null
                  ?Auth::user()->employee->first()->twitter
                  : 'not available'
                  }}
                </p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="uil uil-instagram-alt" style="color: #ac2bac;"></i>
                <p class="mb-0">Insta:
                  {{
                  Auth::user()->employee->first()->insta !== null
                  ?Auth::user()->employee->first()->insta
                  : 'not available'
                  }}
                </p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="uil uil-facebook" style="color: #3b5998;"></i>
                <p class="mb-0">fb:
                  {{
                  Auth::user()->employee->first()->fb !== null
                  ?Auth::user()->employee->first()->fb
                  : 'not available'
                  }}
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex  align-items-center p-3">
                <i class="uil uil-twitter" style="color: #55acee;"></i>
                <p class="mb-0">SSS ID:&nbsp&nbsp
                  {{
                  Auth::user()->employee->first()->sss !== null
                  ?Auth::user()->employee->first()->sss
                  : 'not available'
                  }}
                </p>
              </li>
              <li class="list-group-item d-flex  align-items-center p-3">
                <i class="uil uil-instagram-alt" style="color: #ac2bac;"></i>
                <p class="mb-0">PhilHealth ID:&nbsp&nbsp
                  {{
                  Auth::user()->employee->first()->philhealth !== null
                  ?Auth::user()->employee->first()->philhealth
                  : 'not available'
                  }}
                </p>
              </li>
              <li class="list-group-item d-flex  align-items-center p-3">
                <i class="uil uil-facebook" style="color: #3b5998;"></i>
                <p class="mb-0">Pag-Ibig ID:&nbsp&nbsp
                  {{
                  Auth::user()->employee->first()->pagibig !== null
                  ?Auth::user()->employee->first()->pagibig
                  : 'not available'
                  }}
                </p>
              </li>
              <li class="list-group-item d-flex align-items-center p-3">
                <i class="uil uil-facebook" style="color: #3b5998;"></i>
                <p class="mb-0">Bank Account:&nbsp&nbsp
                  {{
                  Auth::user()->employee->first()->bankacct !== null
                  ?Auth::user()->employee->first()->bankacct
                  : 'not available'
                  }}
                </p>
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
                <p class="mb-0">User Type</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->usertype }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->username }}</p>
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
                <p class="text-muted mb-0">
                  {{
                  Auth::user()->employee->first()->contact !== null
                  ?Auth::user()->employee->first()->contact
                  : 'not available'
                  }}
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  {{
                  Auth::user()->employee->first()->email !== null
                  ?Auth::user()->employee->first()->email
                  : 'not available'
                  }}
                </p>
              </div>
            </div>
            <hr>
          </div>
        </div>

        {{-- Upcoming events clients table --}}
        <div class="col-lg-8 col-lg-12">
          <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
            <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                <h4 class="mb-2 card-title">My Upcoming Bookings</h4>
              </div>
            </div>
            <div class="p-0 card-body">
              <div class="mt-4 table-responsive">
                <table id="basic-table" class="table mb-0 " role="grid">
                  <thead>
                    <tr>
                      <th>Event</th>
                      <th>Date</th>
                      <th>Location</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($upcomingevents as $upcomingevent)
                    <tr>
                      <td>
                        {{ $upcomingevent->booking }}
                      </td>
                      <td>
                        {{ \Carbon\Carbon::parse($upcomingevent->when )->format('M d') }},
                        {{ \Carbon\Carbon::parse($upcomingevent->time_start )->format('g:i A') }}
                      </td>
                      <td>
                        {{ $upcomingevent->venue }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $upcomingevents->links() }}
              </div>
            </div>
          </div>
        </div>

        {{-- Upcoming events clients table --}}
        <div class="col-lg-8 col-lg-12">
          <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
            <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                <h4 class="mb-2 card-title">My Past Bookings</h4>
              </div>
            </div>
            <div class="p-0 card-body">
              <div class="mt-4 table-responsive">
                <table id="basic-table" class="table mb-0 " role="grid">
                  <thead>
                    <tr>
                      <th>Event</th>
                      <th>Date</th>
                      <th>Location</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pastevents as $pastevent)
                    <tr>
                      <td>
                        {{ $pastevent->booking }}
                      </td>
                      <td>
                        {{ \Carbon\Carbon::parse($pastevent->when )->format('M d') }},
                        {{ \Carbon\Carbon::parse($pastevent->time_start )->format('g:i A') }}
                      </td>
                      <td>
                        {{ $pastevent->venue }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $pastevents->links() }}
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