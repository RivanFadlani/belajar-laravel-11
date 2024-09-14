<?php

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

Route::get('/blog', function () {
    $blog_tweets = [
        [
            "title" => "Judul Tweet Pertama",
            "slug" => "judul-tweet-pertama",
            "author" => "Rivan Fadlani",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ratione sint, possimus omnis libero rem nesciunt fugiat adipisci dolorem nemo voluptatum architecto maxime nobis numquam error voluptatem qui animi! Illum voluptate error architecto eveniet ullam quasi. Laborum magni asperiores voluptatem sapiente officia minus explicabo cupiditate possimus veniam quos in iure velit inventore modi quibusdam, quam minima? Dolore, quia, eveniet repudiandae quas cumque in necessitatibus nulla sit, autem quos qui reiciendis voluptates enim sint hic dicta esse vero aperiam. Itaque, sed!"
        ],
        [
            "title" => "Judul Tweet Kedua",
            "slug" => "judul-tweet-kedua",
            "author" => "XXKANJUT",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ratione sint, possimus omnis libero rem nesciunt fugiat adipisci dolorem nemo voluptatum architecto maxime nobis numquam error voluptatem qui animi! Illum voluptate error architecto eveniet ullam quasi. Laborum magni asperiores voluptatem sapiente officia minus explicabo cupiditate possimus veniam quos in iure velit inventore modi quibusdam, quam minima? Dolore, quia, eveniet repudiandae quas cumque in necessitatibus nulla sit, autem quos qui reiciendis voluptates enim sint hic dicta esse vero aperiam. Itaque, sed!. Laborum magni asperiores voluptatem sapiente officia minus explicabo cupiditate possimus veniam quos in iure velit inventore modi quibusdam, quam minima? Dolore, quia, eveniet repudiandae quas cumque in necessitatibus nulla sit, autem quos qui reiciendis voluptates enim sint hic dicta esse vero aperiam. Itaque, sed!"
        ],
    ];

    return view('tweets', [
        "title" => "Tweets",
        "tweets" => $blog_tweets
    ]);
});

// Halaman Single Tweet
Route::get('tweets/{slug}', function($slug) { // 'tweets/{slug}' dapet dari array return "tweets" lalu dapetin key "slug"
    $blog_tweets = [
        [
            "title" => "Judul Tweet Pertama",
            "slug" => "judul-tweet-pertama",
            "author" => "Rivan Fadlani",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ratione sint, possimus omnis libero rem nesciunt fugiat adipisci dolorem nemo voluptatum architecto maxime nobis numquam error voluptatem qui animi! Illum voluptate error architecto eveniet ullam quasi. Laborum magni asperiores voluptatem sapiente officia minus explicabo cupiditate possimus veniam quos in iure velit inventore modi quibusdam, quam minima? Dolore, quia, eveniet repudiandae quas cumque in necessitatibus nulla sit, autem quos qui reiciendis voluptates enim sint hic dicta esse vero aperiam. Itaque, sed!"
        ],
        [
            "title" => "Judul Tweet Kedua",
            "slug" => "judul-tweet-kedua",
            "author" => "XXKANJUT",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ratione sint, possimus omnis libero rem nesciunt fugiat adipisci dolorem nemo voluptatum architecto maxime nobis numquam error voluptatem qui animi! Illum voluptate error architecto eveniet ullam quasi. Laborum magni asperiores voluptatem sapiente officia minus explicabo cupiditate possimus veniam quos in iure velit inventore modi quibusdam, quam minima? Dolore, quia, eveniet repudiandae quas cumque in necessitatibus nulla sit, autem quos qui reiciendis voluptates enim sint hic dicta esse vero aperiam. Itaque, sed!. Laborum magni asperiores voluptatem sapiente officia minus explicabo cupiditate possimus veniam quos in iure velit inventore modi quibusdam, quam minima? Dolore, quia, eveniet repudiandae quas cumque in necessitatibus nulla sit, autem quos qui reiciendis voluptates enim sint hic dicta esse vero aperiam. Itaque, sed!"
        ],
    ];

    $new_tweet = [];
    foreach ($blog_tweets as $tweet) {
        if($tweet["slug"] === $slug) { // kita akan mencari $blog_post yang sudah diubah variablenya menjadi $tweet dan akan mencari nama 'slug' yang nantinya akan kita klik
            $new_tweet = $tweet;
        }
    }

    return view('tweet', [
        "title" => "Single Tweet",
        "tweet" => $new_tweet
    ]);
});