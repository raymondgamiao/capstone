@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <a href="/listings" class="btn btn-main"><i class="fa fa-angle-left mr-2"></i>back</a>
                </div>
                <div class="cta-content bg-white p-5 rounded mt-4" style="border: solid 1px">
                    <h3 class="mb-4">{{ $listing->title }}</h3>
                    <p class="mb-30">{{ $listing->description }}</p>
                    <x-listing-tags :tagsCsv="$listing['tags']" />
                    <p class="mb-3 text-dark"><i class="fa fa-map-marker mr-2"></i>{{ $listing['location'] }}</p>
                    <a class="btn btn-main w-100 my-2" href="mailto:{{ $listing->email }}" target="_blank"> Contact
                        Employer</a>
                    <a class="btn btn-primary w-100" href="{{ $listing->website }}" target="_blank"
                        target="_blank">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection