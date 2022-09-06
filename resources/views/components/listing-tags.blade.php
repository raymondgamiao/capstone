@props(['tagsCsv'])
@php
$tags = explode(',', $tagsCsv)
@endphp
<ul class="d-flex list-unstyled">
    @foreach ($tags as $tag)
    <li>
        <a class="btn btn-main px-3 py-1 mr-2 rounded-pill" href=".../lisdstings/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>