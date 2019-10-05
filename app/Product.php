<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'content' => 'array',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
