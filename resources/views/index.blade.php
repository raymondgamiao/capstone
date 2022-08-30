@extends('layout')

@section('content')
    <section class="banner d-flex align-items-center">
        <div class="banner-img-part"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-xl-8">
                    <div class="block">
                        <span class="text-uppercase text-sm letter-spacing ">The most powerful Solution</span>
                        <h1 class="mb-3 mt-3">Capturing the beauty of your everyday life</h1>
                        <p class="mb-5">Veritatis earum aliquid doloribus molestias, eveniet molestiae aperiam ratione. Facilis velit voluptatibus impedit eligendi delectus illo earum voluptatum, laudantium molestiae!</p>

                        <a href="about.html" target="_blank" class="btn btn-main">Let's Get in Touch<i class="fa fa-angle-right ml-2"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="about-item mb-5 mb-lg-5">
                        <div class="icon">
                            <i class="ti-video-camera"></i>
                        </div>

                        <div class="content">
                            <h4 class="mt-3 mb-3">Photo-Video Coverage</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>

                            <a href="#"> Read More </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="about-item mb-5 mb-lg-5">
                        <div class="icon">
                            <i class="ti-panel"></i>
                        </div>
                        <div class="content">
                            <h4 class="mt-3 mb-3">Sound-Light & LED Wall</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                            <a href="#"> Read More </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="about-item">
                        <div class="icon">
                            <i class="ti-camera"></i>
                        </div>
                        <div class="content">
                            <h4 class="mt-3 mb-3">Digital Printing & Photo booth</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                            <a href="#"> Read More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section process">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="process-block pl-4">
                        <span class="text-uppercase text-sm letter-spacing">Why choose us</span>
                        <h2 class="mb-4 mt-3">We help your dream event, delivered</h2>
                        <p class="mb-4">Highlight your event and capture every moment with us. Don't let your event pass without booking us.</p>
                    </div>
                </div>

                <div class="col-lg-7 col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="icon-block text-center mb-4 mb-lg-0">
                                <i class="ti-comment-alt"></i>
                                <h5>Inquire</h5>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="icon-block text-center mt-4 mb-4 mb-lg-0">
                                <i class="ti-pencil-alt"></i>
                                <h5>Fillout our Form</h5>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="icon-block text-center">
                                <i class="ti-search"></i>
                                <h5>Choose a package</h5>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="icon-block text-center mt-4">
                                <i class="ti-check-box"></i>
                                <h5>Confirm Booking</h5>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-content bg-white p-5 rounded">
                        <h3 class="mb-4">Capturing moments from today<br>
                            Creating memories for a <span class="text-color-primary"> lifetime</span> </h3>
                        <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis possimus dicta dolorem quos atque accusamus nisi ea quibusdam beatae.</p>

                        <a href="project.html" class="btn btn-main">Portfolio<i class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section portfolio pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="heading">
                        <h2 class="mb-4">We’ve Done Lot’s of Events, Let’s Check Some From Here</h2>
                        <p>We have the best experts to elevate your business to the next level, try is and you will see! We have the best experts to elevate your </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio-gallery">
                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="project-details.html">
                            <img src="images/portfolio/event1.jpg" alt="" class="img-fluid w-100">
                            <div class="overlay-item"><i class="ti-link"></i></div>

                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="project-details.html">
                            <img src="images/portfolio/event2.jpg" alt="" class="img-fluid w-100">
                            <div class="overlay-item">
                                <i class="ti-link"></i>
                            </div>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="project-details.html">
                            <img src="images/portfolio/event3.jpg" alt="" class="img-fluid w-100">

                            <div class="overlay-item">
                                <i class="ti-link"></i>
                            </div>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="project-details.html">
                            <img src="images/portfolio/event4.jpg" alt="" class="img-fluid w-100">

                            <div class="overlay-item">
                                <i class="ti-link"></i>
                            </div>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative  mb-4">
                        <a href="project-details.html">
                            <img src="images/portfolio/event5.jpg" alt="" class="img-fluid w-100">

                            <div class="overlay-item">
                                <i class="ti-link"></i>
                            </div>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="project-details.html">
                            <img src="images/portfolio/event6.jpg" alt="" class="img-fluid w-100">

                            <div class="overlay-item">
                                <i class="ti-link"></i>
                            </div>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h2 class="mb-0"><span class="counter-stat font-weight-bold">1730</span> +</h2>
                        <p>Project Done</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h2 class="mb-0"><span class="counter-stat font-weight-bold">125 </span>M </h2>
                        <p>User Worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h2 class="mb-0"><span class="counter-stat font-weight-bold">39</span></h2>
                        <p>Availble Country</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center">
                        <h2 class="mb-0"><span class="counter-stat font-weight-bold">14</span></h2>
                        <p>Award Winner </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="heading">
                        <h2 class="mb-4">What they say about us</h2>
                        <p>They are truely amazing in the industry ,molestiae expedita aspernatur officia, similique minima laudantium. Corrupti ipsa perspiciatis commodi nesciunt rerum mollitia enim voluptate!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 testimonial-wrap">
                    <div class="testimonial-block">
                        <p>
                            Maiores quasi placeat harum itaque, ducimus cumque quas expedita hic. Qui ullam iste provident mollitia expedita facilis fuga repellat.
                        </p>

                        <div class="client-info d-flex align-items-center">
                            <div class="client-img">
                                <img src="images/team/testimonial1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <h6>John Partho</h6>
                                <span>Newyork USA</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <p>
                            Maiores quasi placeat harum itaque, ducimus cumque quas expedita hic. Qui ullam iste provident mollitia expedita facilis fuga repellat.
                        </p>

                        <div class="client-info d-flex align-items-center">
                            <div class="client-img">
                                <img src="images/team/testimonial2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <h6>John Partho</h6>
                                <span>Newyork USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <p>
                            Maiores quasi placeat harum itaque, ducimus cumque quas expedita hic. Qui ullam iste provident mollitia expedita facilis fuga repellat.
                        </p>

                        <div class="client-info d-flex align-items-center">
                            <div class="client-img">
                                <img src="images/team/testimonial1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <h6>John Partho</h6>
                                <span>Newyork USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <p>
                            Maiores quasi placeat harum itaque, ducimus cumque quas expedita hic. Qui ullam iste provident mollitia expedita facilis fuga repellat.
                        </p>

                        <div class="client-info d-flex align-items-center">
                            <div class="client-img">
                                <img src="images/team/testimonial2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <h6>John Partho</h6>
                                <span>Newyork USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <p>
                            Maiores quasi placeat harum itaque, ducimus cumque quas expedita hic. Qui ullam iste provident mollitia expedita facilis fuga repellat.
                        </p>

                        <div class="client-info d-flex align-items-center">
                            <div class="client-img">
                                <img src="images/team/testimonial1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <h6>John Partho</h6>
                                <span>Newyork USA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection