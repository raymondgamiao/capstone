@extends('layout')

@section('content')

<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Contact Us</span>
                    <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{route('contact')}}" class="text-white-50">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact-form-wrap section">
    <div class="container">

        {{-- contact form --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @if ($errors->any())
                <div x-data="{show: true}" class="alert alert-danger card-action " role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session()->has('success'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <span class="text-color">Send a message</span>
                <h3 class="text-md mb-2">Contact Form</h3>
                <div class="row">
                    <div class="col-lg-8">

                        <div id="nav-tabContent">
                            @auth
                            <form action="{{ route('bookingreservation/store') }}" method="POST">
                                @csrf
                                <div id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                    <!--Inquire now-->
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <input id="name" name="name" type="text" class="form-control"
                                                placeholder="Event Name" value="{{old('name')}}" />
                                            @error('name')
                                            <span class="text-danger "><em>{{$message}}</em></span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-sm-6">
                                            <input id="start_date" name="start_date" class="form-control"
                                                placeholder="Date Start" type="text" onfocus="(this.type='date')"
                                                onblur="(this.type='text')" value="{{old('start_date')}}" />
                                            @error('start_date')
                                            <span class="text-danger "><em>{{$message}}</em></span>
                                            @enderror
                                        </div>
                                        <div class=" form-group col-12 col-sm-6">
                                            <input id="end_date" name="end_date" class="form-control"
                                                placeholder="Date End" type="text" onfocus="(this.type='date')"
                                                onblur="(this.type='text')" value="{{old('end_date')}}" />
                                        </div>
                                        <div class="form-group col-12 col-sm-6">
                                            <input id="start_time" name="start_time" class="form-control"
                                                placeholder="Time Start" type="text" onfocus="(this.type='time')"
                                                onblur="(this.type='text')" value="{{old('start_time')}}" />
                                            @error('start_time')
                                            <span class="text-danger "><em>{{$message}}</em></span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-sm-6">
                                            <input id="end_time" name="end_time" class="form-control"
                                                placeholder="Time End" type="text" onfocus="(this.type='time')"
                                                onblur="(this.type='text')" value="{{old('end_time')}}" />
                                            @error('end_time')
                                            <span class="text-danger "><em>{{$message}}</em></span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <input id="venue" name="venue" type="text" class="form-control"
                                                placeholder="Event Venue" value="{{old('venue')}}" />
                                            @error('venue')
                                            <span class="text-danger "><em>{{$message}}</em></span>
                                            @enderror
                                        </div>
                                        <div class="form-group-2 mb-4 col-12">
                                            <textarea id="message" name="message" class="form-control" rows="4"
                                                placeholder="Your Message">{{old('message')}}</textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-main" type="submit">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @else
                            <form action="https://formsubmit.co/photocity38@gmail.com" method="POST">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <!-- Contact us -->

                                    <div class="form-group">
                                        <input type="text" name="Name" class="form-control" placeholder="Full Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="Email" class="form-control"
                                            placeholder="Email Address" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="Number" class="form-control"
                                            placeholder="Phone Number" />
                                    </div>
                                    <div class="form-group-2 mb-4">
                                        <textarea name="Message" placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn btn-main" name="submit" type="submit">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                            @endauth
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="short-info mt-5 mt-lg-0">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>Call Us</h5>
                                    +88 01672 506 744
                                </li>
                                <li>
                                    <h5><a href="mailto:photocity38@gmail.com">Email Us</a></h5>
                                    Support@megakit.com
                                </li>
                                <li>
                                    <h5><a href="https://goo.gl/maps/VhTdh3mDsA2UQxs89">Location Map</a></h5>
                                    3500, 6 Mabini St. Tuguegarao City, Cagayan
                                </li>
                                <li>
                                    <h5><a href="https://web.facebook.com/pc2luna">Facebook Page</a></h5>
                                    https://web.facebook.com/pc2luna
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- google map --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="photo-map mt-90 mb-5">
                    <div id="maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1901.3854731558843!2d121.7269575264319!3d17.613608476225004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3385868212c692f1%3A0xbeb29fb5bec8510!2sPhoto%20City%20Digital%20Portraits!5e0!3m2!1sen!2sph!4v1663257171730!5m2!1sen!2sph"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>"
                    </div>
                </div>
            </div>
        </div>

        {{-- branches --}}
        <div class="row">

            @foreach ($branches as $branch)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="contact-info ">
                    <a href class="mb-4"><strong>{{ $branch['name'] }}</strong></a></h4>
                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-location-pin mr-3"></i>{{ $branch['location'] }}
                        </li>
                        <li>
                            <i class="ti-email mr-3"></i>{{ $branch['email'] }}
                        </li>
                        <li>
                            <i class="ti-mobile mr-3"></i>{{ $branch['contact'] }}
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection