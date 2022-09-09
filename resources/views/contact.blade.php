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
                        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <span>Send a message</span>
                <h3 class="text-md mb-2">Contact Form</h3>

                <div class="row">
                    <div class="col-lg-8">
                        <form id="contact-form" class="contact__form" method="post" action="mail.php">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>

                            <nav>
                                <div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">
                                        Contact us
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">
                                        Inquire now
                                    </button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <!-- Contact us -->

                                    <div class="form-group">
                                        <input name="subject" id="subject" type="text" class="form-control"
                                            placeholder="Full Name" />
                                    </div>
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Email Address" />
                                    </div>
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Phone Number" />
                                    </div>
                                    <div class="form-group-2 mb-4">
                                        <textarea name="message" id="message" class="form-control" rows="4"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn btn-main" name="submit" type="submit">
                                        Send Message
                                    </button>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab" tabindex="0">
                                    <!--Inquire now-->
                                    <div class="form-group">
                                        <input name="subject" id="subject" type="text" class="form-control"
                                            placeholder="Event Name" />
                                    </div>
                                    <div class="form-group">
                                        <input name="name" id="date" type="date" class="form-control"
                                            placeholder="Event Date" />
                                    </div>
                                    <div class="form-group">
                                        <input name="email" id="duration" type="number" class="form-control"
                                            placeholder="Duration Period / Number of Days" />
                                    </div>
                                    <div class="form-group">
                                        <input name="email" id="event-venue" type="text" class="form-control"
                                            placeholder="Event Venue" />
                                    </div>
                                    <div class="form-group-2 mb-4">
                                        <textarea name="message" id="message" class="form-control" rows="4"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn btn-main" name="submit" type="submit">
                                        Send Message
                                    </button>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab" tabindex="0">

                                </div>
                                <div class="tab-pane fade" id="nav-disabled" role="tabpanel"
                                    aria-labelledby="nav-disabled-tab" tabindex="0">
                                    ...
                                </div>
                            </div>


                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="short-info mt-5 mt-lg-0">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>Call Us</h5>
                                    +88 01672 506 744
                                </li>
                                <li>
                                    <h5>Email Us</h5>
                                    Support@megakit.com
                                </li>
                                <li>
                                    <h5>Location Map</h5>
                                    Tuguegarao City, Cagayan
                                </li>
                            </ul>

                            <ul class="social-icons list-inline mt-5">
                                <li class="list-inline-item">
                                    <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="google-map mt-90 mb-5">
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($branches as $branch)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="contact-info ">
                    <h4 class="mb-4">{{ $branch['name'] }}</h4>
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