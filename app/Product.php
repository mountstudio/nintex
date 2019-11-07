<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'logo', 'images','description', 'colors', 'price', 'category_id',];

    protected $casts = [
        'colors' => 'array',
        'images' => 'array',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'size_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
