<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
}
