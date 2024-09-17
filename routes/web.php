<?php

use App\Models\Tweet;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

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
Route::get('/tweets/{tweet:slug}', [TweetController::class, 'show']);// kalau semisal yang dikirim cuma 'tweets/{tweet}' aja maka defaultnya akan mengirim 'id' sebagai unique identifier-nya,
// kalau 'tweets/{tweet:slug}', maka unique identifier-nya akan berubah menjadi 'slug'
// jadi intinya mah, kalo di bahasa sql nya tuh WHERE id = blablabla, sekarang mah jadi WHERE slug = blablabla

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Tweet Categories',
        'categories' => Category::all() // ngambil dari model Category
    ]);
});

// Ini
// =======================v {category} harus sama dengan
// ===========================================================v {$category}
Route::get('/categories/{category:slug}', function(Category $category){ // terhubung dengan model Category
    return view('category', [
        'title' => $category->name,
        'tweets' => $category->tweets, // satu category bisa punya banyak tweet
        'category' => $category->name
    ]);
});