@extends('layout')

@section('content')

<section class="banner d-flex align-items-center">
	<div class={{asset('images/bg/main-banner')}}></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12 col-xl-8">
				<div class="block">
					<span class="text-uppercase text-sm letter-spacing ">What are you waiting for, Book now!</span>
					<h1 class="mb-3 mt-3">Capturing the beauty of your everyday life</h1>
					<p class="mb-5"> We'll create the perfect photo of your event. You've heard two heads are better
						than one, <br>what about a whole team of heads whose passion is great photo experiences</p>

					<a href="about.html" target="_blank" class="btn btn-main">Let's Get in Touch<i
							class="fa fa-angle-right ml-2"></i></a>

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
						<p class="mb-4">We turn into timeless memories, as well as the stories behind them.</p>

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
						<p class="mb-4">We can also setup and operate sounds & lights professionaly</p>
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
						<p class="mb-4">We also offer a magnetize hard copy of pictures in our photo booth</p>
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
					<p class="mb-4">Highlight your event and capture every moment with us. Don't let your event pass
						without booking us.</p>
				</div>
			</div>

				<div class="col-lg-7 col-xs-12 col-md-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="icon-block text-center mb-4 mb-lg-0">
							<i class="ti-comment-alt"></i>
							<h5>Inquire</h5>
							<p>Consulit faster in our form. Will response immmediately</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="icon-block text-center mt-4 mb-4 mb-lg-0">
							<i class="ti-pencil-alt"></i>
							<h5>Fillout our Form</h5>
							<p>A little bit of your information to proceed to the next step</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="icon-block text-center">
							<i class="ti-search"></i>
							<h5>Choose a package</h5>
							<p>Affordable set of package</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="icon-block text-center mt-4">
							<i class="ti-check-box"></i>
							<h5>Confirm Booking</h5>
							<p>All done! Easy as that</p>
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
					<p class="mb-30">
						When you look back on your special day, we want you to remember the moments that made the day
						special.
						For you to remember why you laughed or cried at a certain moment, and how you're having the time
						of your life
					</p>

					<a href="project.html" class="btn btn-main">Gallery<i class="fa fa-angle-right ml-2"></i></a>
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
					<p>Wee'd like to think of ourselves more as historians that just artists with cameras.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row portfolio-gallery">
			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-2">
					<a href="https://www.facebook.com/media/set/?set=a.2758319024430558&type=3">
						<img src="{{asset('images/portfolio/gallery-index/event1.webp')}}" alt="" class="img-fluid w-100">
						<div class="overlay-item"><i class="ti-link"></i></div>

						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Jun & Leyn <br> Prenup shoot</h3>
							<p class="text-white-50">12-06-20t</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-2">
					<a href="https://www.facebook.com/media/set/?set=a.2758319024430558&type=3">
						<img src="{{asset('images/portfolio/gallery-index/event2.webp')}}" alt="" class="img-fluid w-100">
						<div class="overlay-item">
							<i class="ti-link"></i>
						</div>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Jun & Leyn <br> Prenup shoot</h3>
							<p class="text-white-50">12-06-20t</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-2">
					<a href="https://www.facebook.com/media/set/?set=a.2179834858945647&type=3">
						<img src="{{asset('images/portfolio/gallery-index/event3.webp')}}" alt="" class="img-fluid w-100">

						<div class="overlay-item">
							<i class="ti-link"></i>
						</div>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Cathering <br> A Decade and Eight</h3>
							<p class="text-white-50">11-09-18</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-2">
					<a href="https://www.facebook.com/media/set/?set=a.2179834858945647&type=3">
						<img src="{{asset('images/portfolio/gallery-index/event4.webp')}}" alt="" class="img-fluid w-100">

						<div class="overlay-item">
							<i class="ti-link"></i>
						</div>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Cathering <br> A Decade and Eight</h3>
							<p class="text-white-50">11-09-18</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative  mb-2">
					<a href="https://www.facebook.com/media/set/?set=a.2486295468299583&type=3">
						<img src="{{asset('images/portfolio/gallery-index/event5.webp')}}" alt="" class="img-fluid w-100">

						<div class="overlay-item">
							<i class="ti-link"></i>
						</div>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">ChristenJay & Hazel <br> Wedding</h3>
							<p class="text-white-50">1-08-20</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-2">
					<a href="https://www.facebook.com/media/set/?set=a.2486295468299583&type=3">
						<img src="{{asset('images/portfolio/gallery-index/event6.webp')}}" alt="" class="img-fluid w-100">

						<div class="overlay-item">
							<i class="ti-link"></i>
						</div>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">ChristenJay & Hazel <br> Wedding</h3>
							<p class="text-white-50">1-08-20</p>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="row mx-2">
			<div class="col-lg-4 col-md-6 mb-5 mx-2">
				<a href="project.html" class="btn btn-main">Show more<i class="fa fa-angle-right ml-2"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="section counter">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h2 class="mb-0"><span class="counter-stat font-weight-bold">8</span> +</h2>
					<p>Years of Service</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h2 class="mb-0"><span class="counter-stat font-weight-bold">125 </span></h2>
					<p>Events Done</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h2 class="mb-0"><span class="counter-stat font-weight-bold">10</span></h2>
					<p>Branches</p>
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