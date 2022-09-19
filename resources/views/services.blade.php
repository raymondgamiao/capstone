@extends('layout')

@section('content')
<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our services</span>
                    <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>

                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{route('services')}}" class="text-white-50">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-img mb-5 mb-lg-0">
                    <img src="{{asset('images/service/service-one.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-info ">
                    <span class="text-color font-weight-bold">01</span>
                    <h3 class="text-md mb-4 mt-2">
                        Setup meeting with the client
                    </h3>
                    <p>First we will schedule the meeting after the booking confirmation. We will discuss about the
                        package you've avail
                        and sign to our contract.
                    </p>
                </div>
            </div>
        </div>

        <div class="content-padding position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-info mb-5 mb-lg-0">
                        <span class="text-color font-weight-bold">02</span>
                        <h3 class="text-md mb-4 mt-2">
                            Get Set Up and Capture Images
                        </h3>
                        <p>When we arrive at the shoot location, It's time to scout out backdrops and other spots where
                            we can capture images. We
                            want to get our gear set out so it's ready for us to grab when we need it.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-img">
                        <img src="{{asset('images/service/service-two.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="service-img mb-5 mb-lg-0">
                    <img src="{{asset('images/service/service-4.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-info">
                    <span class="text-color font-weight-bold">03</span>
                    <h3 class="text-md mb-4 mt-2">
                        Deliver Final Photos
                    </h3>
                    <p>After the event, it will take several days before we deliver because of some enchancing and
                        editing of the images. Once
                        that's done we will deliver the photos and we will transfer the soft copy. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section case-study">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="case-study-content text-center mb-5">
                    <h2 class="mb-4">Other offers</h2>
                    <p>There are also many variations of services that we can offer. <br> Examples below</p>
                </div>
            </div>
        </div>



        <div class="case-timeline">
            <div class="case-timeline-divider"></div>
            <div class="case-timeline-dot"></div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="case-img ">
                        <img src="{{asset('images/service/passport-pic.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-content">
                        <h4 class="mb-3">Passport size picture</h4>
                        <p>We can assist you on managing your passport size picture. At a small 
                            cost we can assist you and have a good quality photo.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="case-timeline">
            <div class="case-timeline-divider"></div>
            <div class="case-timeline-dot"></div>
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="case-content">
                        <h4 class="mb-3">Tarpaulin printing</h4>
                        <p> We also offer tarpaulin printing, 1pc or bulk orders, yes we can do it!
                            Now let's talk about your dimension! 
                        </p>
                    </div>
                </div>
                <div class="col-lg-6  order-1 order-lg-2">
                    <div class="case-img">
                        <img src="{{asset('images/service/tarpaulin.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="case-timeline">
            <div class="case-timeline-divider"></div>
            <div class="case-timeline-dot"></div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="case-img">
                        <img src="{{asset('images/service/bookbind.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-content">
                        <h4 class="mb-3">Soft and Hard Bindings</h4>
                        <p>For those who are making a book or want to bind the documentation of your 
                            thesis. Inlcuding engrave of your title at the cover.  
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="case-timeline">
            <div class="case-timeline-divider"></div>
            <div class="case-timeline-dot"></div>
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="case-content">
                        <h4 class="mb-3">Photobooth</h4>
                        <p> If you want a Photobooth in your event, We have some plenty of backdrops and placards.
                            Ready for printout also.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6  order-1 order-lg-2">
                    <div class="case-img">
                        <img src="{{asset('images/service/photobooth.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


       

        
        
    </div>
</section>

<section class="section service">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="heading">
                    <h2 class="mb-4">Services package that we offer</h2>
                    <p>Show off and spice up your event with our package variations including our photo booths! We offer a variety of backdrops, booths, and more to match your theme!
						Our packages are offered at an affordable rate so that everyone can have their memories immortalized. All our business papers are filed and completed. 
					</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="service-offer">
                    <i class="ti-video-clapper"></i>
                    <h4 class="fw-bold">Photo & Video</h4>
                </div>
                <div class="service-item-list">
                    <a data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                        aria-controls="multiCollapseExample1">Basic
                        <i class="ti-angle-double-down"></i>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card-body">
                                    <ul>
                                        <li> 4hours of event day coverage </li>
                                        <li> 1 photographer </li>
                                        <li> 1 videographer </li>
                                        <li> USB or DVD with high resolution images </li> 
                                        <br>
                                        <p class="text-dark font-weight-bold"> Amount  ₱ 10,000 </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-list">
                    <a data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false"
                        aria-controls="multiCollapseExample1">Deluxe
                        <i class="ti-angle-double-down"></i>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card-body">
                                    <ul>
                                        <li> 6 hours of event day coverage </li>
                                        <li> 2 photographers </li>
                                        <li> 1 videographer </li>
                                        <li> Online Gallery to view and order prints </li>
                                        <li> USB or DVD with high resolution images </li>
                                        <li> 12x12 Photo Album (10 pages) </li>
                                        <br>
                                        <p class="text-dark font-weight-bold"> Amount  ₱ 20,000 </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-list">
                    <a data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false"
                        aria-controls="multiCollapseExample1">Ultimate
                        <i class="ti-angle-double-down"></i>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card-body">
                                    <ul>
                                        <li> 8 hours of event day coverage </li>
                                        <li> 2 photographers </li>
                                        <li> 2 videographers </li>
                                        <li> Online Gallery to view and order prints </li>
                                        <li> USB or DVD with all of the events images </li>
                                        <li> 12x12 Photo Album (20 pages) </li>
                                        <li> 16x20 Canvas of favorite photo </li>
                                        <br>
                                        <p class="text-dark font-weight-bold"> Amount  ₱ 25,000 </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service-offer">
                    <i class="ti-panel"></i>
                    <h4 class="fw-bold">Sounds & Lights</h4>
                </div>
                <div class="service-item-list">
                    <a data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false"
                        aria-controls="multiCollapseExample4">Bronze
                        <i class="ti-angle-double-down"></i>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample4">
                                <div class="card-body">
                                    <ul>
                                        <li> 1 Unit Mixer Mackie DL </li>
                                        <li> 2 Units Speaker Sound Logic 12a </li>
                                        <li> 2 units wireless Microphone </li>
                                        <li> 1 laptop for play back </li>   
                                        <li> DMX for light control </li>
                                        <li> Speaker stand and lights stand </li>   
                                        <br>
                                        <p class="text-dark font-weight-bold"> Amount ₱ 12,000 </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-list">
                    <a data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false"
                        aria-controls="multiCollapseExample5">Silver
                        <i class="ti-angle-double-down"></i>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample5">
                                <div class="card-body">
                                    <ul>
                                        <li> 1 Unit Mixer Mackie DL </li>
                                        <li> 2 Units Speaker Sounds Logic 12a </li>
                                        <li> 2 Units Speaker NEXO PS15 </li>
                                        <li> 2 Units Amplifier </li>
                                        <li> 4 units wireless microphone </li>
                                        <li> 1 set DJ mixer with laptop </li>
                                        <li> 16 units LED RGBW </li>
                                        <li> 2 units movingheads beam </li>
                                        <li> speaker stand and lights stand </li>
                                        <li> smoke machine </li>
                                        <br>
                                        <p class="text-dark font-weight-bold"> Amount ₱ 18,000 </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item-list">
                    <a data-bs-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false"
                        aria-controls="multiCollapseExample6">Platinum
                        <i class="ti-angle-double-down"></i>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample6">
                                <div class="card-body">
                                    <li> 1 Unit Mixer Yamaha DL </li>
                                    <li> 2 Units Speaker Sounds Logic 12a </li>
                                    <li> 2 Units Speaker NEXO PS15 </li>
                                    <li> 2 Units Amplifier </li>
                                    <li> 4 units wireless microphone </li>
                                    <li> 1 set DJ mixer with laptop </li>
                                    <li> 32 units LED RGBW </li>
                                    <li> 4 units moving heads beam  </li>
                                    <li> LED bar and Laser with laptop </li>
                                    <li> speaker stand and lights stand </li>
                                    <li> smoke machine </li>
                                    <br>
                                    <p class="text-dark font-weight-bold"> Amount ₱ 25,000 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</section>

<section class="cta-2 bg-light">
    <div class="container">
        <div class="cta-block py-5">
            <div class="row align-items-center ">
                <div class="col-lg-8">
                    <span class="text-color">For Every type events</span>
                    <h2 class="mt-2 mb-4 mb-lg-0">Entrust your events to our best team of professionals</h2>
                </div>
                <div class="col-lg-4">
                    <a href={{route('contact')}} class="btn btn-main btn-round-full float-lg-right">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection