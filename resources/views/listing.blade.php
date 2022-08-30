@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content bg-white p-5 rounded">
                    <h3 class="mb-4">{{ $listing['title'] }}</h3>
                    <p class="mb-30">{{ $listing['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection