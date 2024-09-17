<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // dibawah ini methodnya diambil dari route ''tweets' => $category->tweets,'
    public function tweets() // terhubung dengan model tweet
    {
        return $this->hasMany(Tweet::class); // satu category terhubung ke banyak tweet
    }
}
