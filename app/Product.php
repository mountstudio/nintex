<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\Facades\CartFacade;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'colors', 'price', 'category_id',];

    protected $casts = [
        'colors' => 'array',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
//    public static function add()
}
