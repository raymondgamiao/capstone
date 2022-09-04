@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/listings" class="cta-content bg-white rounded mt-4 d-flex w-100  p-0">
                    <input type="text" name="search" class="form-control" placeholder="search"
                        style="border-radius: 5px 0 0 5px ">
                    <button type="submit" class="btn btn-main rounded-end"
                        style="border-radius: 0 5px 5px 0 ">search</button>
                </form>
            </div>
            <div class="col-12 cta-content bg-wihte rounded mt-4 text-center">
                <a class="btn btn-main" href="/listings/create">Post Job</a>
            </div>
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