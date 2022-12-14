@extends('layout')

@section('content')
<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">About Us</span>
                    <h1 class="text-capitalize mb-5 text-lg">Our Company</h1>

                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{route('about')}}" class="text-white-50">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="heading text-center">
                    <h2>We bring joy and <br> <span class="text-color">creativity with every photo</span> </h2>
                </div>

                <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="counter-item counter--style text-center mb-5 mb-lg-0">
							<i class="ti-face-smile"></i>
							<h2 class="mb-0 mt-3"><span class="counter-stat font-weight-bold">8</span>+</h2>
							<p>Years of Service</p>
						</div>	
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="counter-item counter--style text-center mb-5 mb-lg-0">
							<i class="ti-thumb-up"></i>
							<h2 class="mb-0 mt-3"><span class="counter-stat font-weight-bold">125</h2>
							<p>Events Done</p>
						</div>	
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="counter-item counter--style text-center">
							<i class="ti-home"></i>
							<h2 class="mb-0 mt-3"><span class="counter-stat font-weight-bold">10</span></h2>
							
						<p>Branches</p>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>

<section class="video-block section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading feature-list">
                    <h2 class="mb-4">Growing Media Events Since 2014</h2>
                    <p>If you are looking for a Photo Booth, Photo-Video Coverage and Sounds lights rental in
                        Tuguegarao area for your next birthday party, wedding, or other event, we're
                        the right company for you! </p>

                    <ul class="list-unstyled mt-4 mb-5">
                        <li><i class="ti-check mr-3"></i>Professional DSLR camera for crisp images.</li>
                        <li><i class="ti-check mr-3"></i>Ensure quality, unique and creative service.</li>
                        <li><i class="ti-check mr-3"></i>Flexible staff with complete equipments. </li>
                    </ul>

                    <a class="btn btn-main" href="{{route('services')}}">All Services<i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="video-img">
                    <iframe class="video-about" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPhotocityWeddingsandEventsPH%2Fvideos%2F1810075725726484%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading text-center mb-50">
                    <h2 class="mb-4">Our Team</h2>
                    <p>Our team is made up of professional photographers, videographers, and video editors. We are very
                        determined and passionate about our work.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{asset('images/team/team-3.webp')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-4 mb-0 text-center">Pastor Henry Domingo</h4>
                    <p class="text-center">Owner</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{asset('images/team/team-1.webp')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-4 mb-0 text-center">Mary jane Carbonel</h4>
                    <p class="text-center">Executive Assistant</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{asset('images/team/team-4.webp')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-4 mb-0 text-center">Oliver Domingo</h4>
                    <p class="text-center">Sensation Manager</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-block">
                    <img src="{{asset('images/team/team-2.webp')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-4 mb-0 text-center">Jayson Bandulin</h4>
                    <p class="text-center">Production manager</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-block">
                    <img src="{{asset('images/team/team-5.webp')}}" alt="" class="img-fluid w-100">
                    <h4 class="mt-4 mb-0 text-center">Faith Maddara</h4>
                    <p class="text-center">Multimedia Head Officer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section awards bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="why-content">
                    <h2 class="mb-4">We also work with</h2>
                    <p class="mb-5">
                        Company, Organizations and Big Events that we work with before. We can handle big events 
                        and yes, we're the best at what we do.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="award-img-block mb-4 mb-lg-0">
                    <div class="award-img">
                        <img src="{{asset('images/about/one.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="award-img-block mb-4 mb-lg-0">
                    <div class="award-img">
                        <img src="{{asset('images/about/event-2.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="award-img-block mb-4 mb-lg-0">
                    <div class="award-img">
                        <img src="{{asset('images/about/event-3.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="award-img-block mb-4 mb-lg-0">
                    <div class="award-img">
                        <img src="{{asset('images/about/four.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="award-img-block mb-4 mb-lg-0">
                    <div class="award-img">
                        <img src="{{asset('images/about/event-4.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="award-img-block">
                    <div class="award-img">
                        <img src="{{asset('images/about/event-5.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="heading">
					<h2 class="mb-4">What they say about us</h2>
					<p>They are truely amazing in the industry, Satisfied with their work. Surely recommended. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 testimonial-wrap">
				<div class="testimonial-block">
					<p>
						I would like to thank you Mr. Henry and the rest of your team for taking care of my
						debut party. Your teams
						did an excellent job in filming the event. May God bless all of you always and more power to
						your company.
					</p>

					<div class="client-info d-flex align-items-center">
						<div class="client-img">
							<img src="{{asset('images/team/testimonial-one.webp')}}" alt="" class="img-fluid">
						</div>
						<div class="info">
							<h6>Kate Garcia</h6>
							<span>Solena Tuguegarao</span>
						</div>
					</div>
				</div>

				<div class="testimonial-block">
					<p>
						Thank you so much Photocity for making our wedding a magical! Two thumbs up for all the staff
						and crew, you made us feel celebrity on
						our wedding day, Thanks for you full support guys you grant all of our request and demands.
					</p>

					<div class="client-info d-flex align-items-center">
						<div class="client-img">
							<img src="{{asset('images/team/testimonial-two.webp')}}" alt="" class="img-fluid">
						</div>
						<div class="info">
							<h6>Andrew Reyes</h6>
							<span>Isabela</span>
						</div>
					</div>
				</div>
				<div class="testimonial-block">
					<p>
						We want to start by thanking God for what we have now and of course special thanks to Photocity
						for making our dream wedding come true.
						We recommend our awesome coordinator kahit nasa malayo kami naging perfect ang wedding namin.
					</p>

					<div class="client-info d-flex align-items-center">
						<div class="client-img">
							<img src="{{asset('images/team/testimonial-five.webp')}}" alt="" class="img-fluid">
						</div>
						<div class="info">
							<h6>Liebel Delacruz</h6>
							<span>Isabela City</span>
						</div>
					</div>
				</div>
				<div class="testimonial-block">
					<p>
						First time renting the Photocity and I must say the experience was terrific. The team was great
						to work with and could not be any nicer.
						They are fully equipped with proffesional lights. Looks like I found long term studio to work
						with.
					</p>

					<div class="client-info d-flex align-items-center">
						<div class="client-img">
							<img src="{{asset('images/team/testimonial-six.webp')}} "alt="" class="img-fluid">
						</div>
						<div class="info">
							<h6>Catherine Delosantos</h6>
							<span>Nueva Viscaya</span>
						</div>
					</div>
				</div>
				<div class="testimonial-block">
					<p>
						Very accomodating team, gets the look and feel of what you want, easy to coordinate with! (They
						give you no hassle whatsoever) Rest
						assured, your moments are captured a hight qaulity and good memories in the future, 5/5.
					</p>

					<div class="client-info d-flex align-items-center">
						<div class="client-img">
							<img src="{{asset('images/team/testimonial-four.webp')}}" alt="" class="img-fluid">
						</div>
						<div class="info">
							<h6>Erna Joyce</h6>
							<span>Ilagan City</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<x-testimonials />

@endsection