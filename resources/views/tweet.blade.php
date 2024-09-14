{{-- @dd($tweet) --}}
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $tweet["title"] }}</h2>
        <h5>{{ $tweet["author"] }}</h5>
        <p>{{ $tweet["body"] }}</p>

        <a href="/blog">Back To Tweets</a>
    </article>
@endsection