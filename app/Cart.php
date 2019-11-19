<?php

namespace App;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ='carts';

    protected $casts = [
        'cart' =>'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function add(Product $product, $count = 1, $token) {
        if (CartFacade::session($token)->get($product->id)){
            return CartFacade::session($token)->update($product->id, [
                'quantity' => $count
            ]);
        } else
        {
            return CartFacade::session($token)->add($product->id, $product->title, $product->price, $count ? $count : 1);
        }
    }

    public static function remove(Product $product, $count, $token){
        if (!CartFacade::session($token)->get($product->id)){
            return null;
        }
        if (CartFacade::session($token)->get($product->id)->quantity == $count){
            return CartFacade::session($token)->remove($product->id);
        }else{
            return CartFacade::session($token)->update($product->id, [
                'quantity' => -$count
            ]);
        }
    }

    public static function deleteProduct(Product $product, $token){
        if (!CartFacade::session($token)->get($product->id)){
            return null;
        }
        return CartFacade::session($token)->remove($product->id);
    }
}
