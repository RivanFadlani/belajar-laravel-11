{{-- @dd($tweets) --}}

@extends('layouts.main')

@section('container')
    @foreach ($tweets as $tweet)
        <!-- $tweets berasal dari 'routes/web.php' di dalam route 'blog' -->
        <article class="mb-5">
            <h2>
                <a href="/tweets/{{ $tweet["slug"] }}">
                    {{ $tweet['title'] }}
                </a>
            </h2>
            <h5>By: {{ $tweet['author'] }}</h5>
            <p>{{ $tweet['body'] }}</p>
        </article>
    @endforeach
@endsection
