@extends('layout')

@section('content')

<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">portfolio</span>
                    <h1 class="text-capitalize mb-5 text-lg">Our Works</h1>

                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white-50">portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="heading text-center">
                    <h2 class="mb-4">Let’s Check Some Works</h2>
                    <p>We have the best photographers and videographers to elevate your events to the next level, try it
                        and you will see!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 1st debut gallery -->
    <div class="container">
        <div class="row ">

            @foreach ($galleries as $gallery)
            <div class="col-lg-4 col-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="{{ $gallery['album_url'] }}" target="_blank">
                        <img src="{{ $gallery['album_cover'] }}" alt="" class="img-fluid w-100">
                        <div class="overlay-item"><i class="ti-link"></i></div>

                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">{{ $gallery['album_name'] }}</h3>
                            <p class="text-white-50">{{ $gallery['album_date'] }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection