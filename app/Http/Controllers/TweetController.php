<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets', [
            "title" => "Tweets",
            "tweets" => Tweet::all() // diambil dari model Tweet dan mengambil method all()
        ]);
    }

    // single tweet
    public function show(Tweet $tweet) // untuk menampilkan detail dari satu postnya
    // route mengirim model ke controller (Tweet), lalu diikat menjadi satu (Tweet $tweet)
    // lalu variebel yang dikirim harus sama dengan variabel yang dikirimkan di route '/tweet/{tweet}'
    {
        return view('tweet', [
            "title" => "Single Tweet",
            "tweet" => $tweet // berhubungan denga Route model binding di atas (Tweet $tweet)
        ]);
    }
}
