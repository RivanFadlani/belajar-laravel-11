{{-- @dd($tweet) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Single Tweet</h1>
    <article>
        <h2 class="mb-5">{{ $tweet->title }}</h2>

        <p>By, Rivan Fadlani in <a href="/categories/{{ $tweet->category->slug }}">{{ $tweet->category->name }}</a></p>

        {{-- <h5>{{ $tweet["author"] }}</h5> --}}
        {!! $tweet->body !!} <!-- bisa mengeksekusi code html -->

        <a href="/blog">Back To Tweets</a>
    </article>
@endsection