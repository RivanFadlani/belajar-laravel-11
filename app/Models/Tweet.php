<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // Mass Assignment
    // protected $fillable = [ // $fillable berarti data ini yang boleh diiisi
    //     'title',
    //     'excerpt',
    //     'body'
    // ];
    protected $guarded = [ // $guarded berarti data ini yang tidak boleh diiisi
        'id'
    ];

    public function category() // terhubung dengan model category
    {
        return $this->belongsTo(Category::class); // satu tweet category punya satu category
    }

    public function user()
    {
        return $this->belongsTo((User::class));
    }
}
