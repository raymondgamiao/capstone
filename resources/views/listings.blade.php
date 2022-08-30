@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            @unless (count($listings)==0)
            @foreach ($listings as $listing)
            <div class="col-lg-12">
                <div class="cta-content bg-white p-5 rounded">
                    <h3 class="mb-4">{{ $listing['title'] }}</h3>
                    <p class="mb-30">{{ $listing['description'] }}</p>

                    <a href="listing/{{$listing['id']}}" class="btn btn-main">View<i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-lg-3">
                <div class="cta-content bg-white p-5 rounded">
                    <h3 class="mb-4">No Listing found</h3>           
                </div>
            </div>
            @endunless
        </div>
    </div>
</section>
@endsection