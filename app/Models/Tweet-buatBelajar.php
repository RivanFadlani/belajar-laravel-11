<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Tweet // extends Model
{
    // use HasFactory;

    private static $blog_tweets = [
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

    // kalau kita menggunakan properti static, maka kita harus menggunakan self::$blog_tweets
    // kalau kita menggunakan properti biasa, maka kita harus menggunakan $this->blog_tweets

    public static function all()
    {
        return collect(self::$blog_tweets); // collect() itu berhubungan dengan $tweets->firstWhere(), tepatnya firstWhere()
    }

    public static function find($slug)
    {
        // kalau static:: itu untuk method static, bukan properti static
        $tweets = static::all();
        // $tweets = self::$blog_tweets; // ambil dulu semua tweets nya

        // $tweet = [];
        // foreach ($tweets as $twt) { // lalu, kita looping satu persatu dan akan direpresentasikan dengan $twt
        //     if ($twt["slug"] === $slug) { // kalau '=== $slug' itu sama dengan $slug yang dikirim parameter find(), maka masukan tweet tersebut ke dalam variabel $post '$tweet = $twt'
        //         $tweet = $twt;
        //     }
        // }

        // kalau pake collection
        return $tweets->firstWhere('slug', $slug); // ambil data $tweets yang bentuknya collection lalu cari yang pertama ditemnukan dimana 'slug' sama dengen $slug
    }
}
