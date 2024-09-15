<?php

use App\Http\Controllers\TweetController;
use App\Models\Tweet;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rivan Fadlani",
        "email" => "rivanfadlani@example.com",
        "image" => "novablast.jpeg"
    ]);
});

Route::get('/blog', [TweetController::class, 'index']); // masuk ke kelas controller 'TweetController', lalu cari method index
// Halaman Single Tweet
Route::get('tweets/{slug}', [TweetController::class, 'show']);