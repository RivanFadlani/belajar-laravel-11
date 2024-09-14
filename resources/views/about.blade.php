@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3> <!-- terhubung dengan 'routes/web.php -->
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}">
@endsection
