@props(['tagsCsv'])
@php
    $tags = explode(',', $tagsCsv)
@endphp
<ul class="d-flex">
    @foreach ($tags as $tag)
    <li>
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>