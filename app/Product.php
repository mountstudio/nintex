<?php

namespace App;

use App\Collections\ProductCollection;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\Facades\CartFacade;

class Product extends Model
{
    use Favoriteable;

    protected $fillable = ['title', 'logo','description', 'season', 'category_id', 'wholesale_price',];
//    protected $casts = [
//        'colors' => 'array',
//        'sizes' => 'array',
//    ];

    public function newCollection(array $models = [])
    {
        return new ProductCollection($models);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function sizes()
    {
//        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'sizes')->withPivot('color', 'quantity', 'images', 'price');
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'sizes')->withPivot('color', 'quantity', 'images', 'price', 'type')->withTimestamps();
    }

    public function sizesWholesale()
    {
        return $this->hasMany(ProductSize::class);
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
