@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            @unless (count($listings)==0)
            @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
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