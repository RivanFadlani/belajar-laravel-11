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

    public function show($slug) // untuk menampilkan detail dari satu postnya
    {
        return view('tweet', [
            "title" => "Single Tweet",
            "tweet" => Tweet::find($slug)
        ]);
    }
}
