{{-- @dd($tweets) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog</h1>
    @foreach ($tweets as $tweet)
        <!-- $tweets berasal dari 'routes/web.php' di dalam route 'blog' -->
        <article class="mb-5 pb-4 border-bottom">
            <h2>
                <a href="/tweets/{{ $tweet->slug }}" class="text-decoration-none">
                    {{ $tweet->title }}
                </a>
            </h2>

            <p>By. <a href="#" class="text-decoration-none">{{ $tweet->user->name }}</a> in <a href="/categories/{{ $tweet->category->slug }}" class="text-decoration-none">{{ $tweet->category->name }}</a></p>

            <p>{{ $tweet->excerpt }}</p>

            <a href="/tweets/{{ $tweet->slug }}" class="text-decoration-none">Read More..</a>
        </article>
    @endforeach
@endsection
