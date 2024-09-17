{{-- @dd($tweets) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Tweet Categories</h1>
    @foreach ($categories as $category)
        <!-- $tweets berasal dari 'routes/web.php' di dalam route 'blog' -->
        <ul>
            <li>
                <h2>
                    <a href="/categgories/{{ $category->slug }}">
                        {{ $category->name }}
                    </a>
                </h2>
            </li>
        </ul>

            {{-- <h5>By: {{ $tweet->author }}</h5> --}}
    @endforeach
@endsection
