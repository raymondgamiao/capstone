@extends('layout')

@section('content')
<section class="section mt-5">
  <div class="container content-inner mt-5 py-0">
    <div>
      <div class="row">
        <div class="col-lg-4">
          {{-- picture and location --}}
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ asset('storage/' . Auth::user()->client->first()->pfp) }}" alt=" avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">
                {{Auth::user()->username}}
              </h5>
              <p class="text-muted mb-1">
                {{Auth::user()->usertype}}
              </p>
              <p class="text-muted mb-4">
                {{
                Auth::user()->client->first()->address !== null
                ?Auth::user()->client->first()->address
                : 'not available'
                }}
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="{{ route('clienteditprofile') }}">Edit Info</a>
              </div>
            </div>
          </div>
          {{-- tiwtter insta fb --}}
          <div class="card mb-5 mb-lg-4">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="uil uil-twitter" style="color: #55acee;"></i>
                  <p class="mb-0">Twitter:
                    {{
                    Auth::user()->client->first()->twitter !== null
                    ?Auth::user()->client->first()->twitter
                    : 'not available'
                    }}
                  </p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="uil uil-instagram-alt" style="color: #ac2bac;"></i>
                  <p class="mb-0">Insta:
                    {{
                    Auth::user()->client->first()->insta !== null
                    ?Auth::user()->client->first()->insta
                    : 'not available'
                    }}
                  </p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="uil uil-facebook" style="color: #3b5998;"></i>
                  <p class="mb-0">fb:
                    {{
                    Auth::user()->client->first()->fb !== null
                    ?Auth::user()->client->first()->fb
                    : 'not available'
                    }}
                  </p>
                </li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-lg-8">
          {{-- basic info --}}
          <div class="card mb-4">
            <div class="card-body">

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name:</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    {{Auth::user()->client->first()->name}}
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    {{Auth::user()->username}}
                  </p>
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
                    Auth::user()->client->first()->contact !== null
                    ?Auth::user()->client->first()->contact
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
                    Auth::user()->client->first()->email !== null
                    ?Auth::user()->client->first()->email
                    : 'not available'
                    }}
                  </p>
                </div>
              </div>
              <hr>
            </div>
          </div>
          {{-- Upcoming events clients table --}}
          <div class="mb-4">
            <div class=" overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
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
                          {{ $upcomingevent->name }}
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

                </div>
              </div>
            </div>
          </div>
          {{-- Upcoming events clients table --}}
          <div>
            <div class=" overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
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
                          {{ $pastevent->name }}
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

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

</section>



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