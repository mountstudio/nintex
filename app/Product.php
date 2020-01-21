<?php

namespace App;

use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\Facades\CartFacade;

class Product extends Model
{
    protected $fillable = ['title', 'logo','description', 'season', 'category_id',];

    use Favoriteable;

//    protected $casts = [
//        'colors' => 'array',
//        'sizes' => 'array',
//    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'sizes')->withPivot('color', 'quantity', 'images', 'price');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
//    public static function add()

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
