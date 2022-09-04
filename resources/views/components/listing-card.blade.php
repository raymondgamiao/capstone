@props(['listing'])

<div class="col-lg-12">
    <div class="cta-content bg-white p-5 rounded mt-4" style="border: solid 1px">
        <h3 class="mb-4">{{ $listing['title'] }}</h3>

        <!--  <x-listing-tags :tagsCsv="$listing['tags']" /> -->
        @php
        $tags = explode(',', $listing['tags'])
        @endphp
        <ul class="d-flex list-unstyled">
            @foreach ($tags as $tag)
            <li>
                <a class="btn btn-main px-3 py-1 mr-2 rounded-pill" href="/?tag={{$tag}}">{{$tag}}</a>
            </li>
            @endforeach
        </ul>
        <p class="mb-3 text-dark"><i class="fa fa-map-marker mr-2"></i>{{ $listing['location'] }}</p>
        <a href="../listing/{{$listing['id']}}" class="btn btn-main">View<i class="fa fa-angle-right ml-2"></i></a>
    </div>
</div>