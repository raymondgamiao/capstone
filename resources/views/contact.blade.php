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
                <span class="text-color">Send a message</span>
                <h3 class="text-md mb-5">Contact Form</h3>

                <div class="row">
                    <div class="col-lg-8">
                        <form id="contact-form" class="contact__form " method="post" action="mail.php">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>I Need help in ...</option>
                                    <option>Software Design</option>
                                    <option>Development cycle</option>
                                    <option>Software Development</option>
                                    <option>Maintenance</option>
                                    <option>Process Query</option>
                                    <option>Cost and Duration</option>
                                    <option>Modal Delivery</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subject">
                            </div>

                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name">
                            </div>

                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email Address">
                            </div>

                            <div class="form-group-2 mb-4">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                            </div>
                            <button class="btn btn-main" name="submit" type="submit">Send Message</button>
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
                                    contact@mail.com
                                </li>
                                <li>
                                    <h5>Location Map</h5>
                                    North Main Street,Brooklyn Australia
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
            <div class="col-lg-4 col-md-6">
                <div class="contact-content pl-lg-5 mt-5 mt-lg-0 mb-5 mb-lg-0">
                    <h4 class="mb-4">Corporate Office</h4>

                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-location-pin mr-3"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ti-email mr-3"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info mb-5 mb-lg-0 mt-md-5 mt-lg-0">
                    <h4 class="mb-4">USA Location</h4>
                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-location-pin mr-3"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ti-email mr-3"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info ">
                    <h4 class="mb-4">Europe</h4>
                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-location-pin mr-3"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ti-email mr-3"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection