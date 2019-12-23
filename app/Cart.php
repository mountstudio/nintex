<?php

namespace App;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ='carts';
    protected $fillable = ['id', 'name', 'sum', 'diff'];
    public static $INWAIT = 0;
    public static $INPROGRESS = 1;
    public static $DELIVERED = 2;
    public static $FINISHED = 3;


    protected $casts = [
        'cart' =>'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function add(Product $product, $count = 1, $token, $options = []) {
        //пересмотри условие оно какое то странное!
        if (CartFacade::session($token)->get($options['product_id']) && CartFacade::session($token)->get($options['size']) && CartFacade::session($token)->get($options['color'])){
            return CartFacade::session($token)->update($options['product_id'], ['quantity' => $count,]);
        } else {
            return CartFacade::session($token)->add($options['product_id'], $product->title, $product->price, $count ? $count : 1, ['size'=> $options['size'], 'colors' => $options['color']]);
        }
    }

//    public static function add(Product $product, $count = 1, $token, $options = []) {
//        if ($pro = CartFacade::session($token)->get($options['product_id'])){
//            if ($pro->attributes['size'] == $options['size']) {
//                return CartFacade::session($token)->update($options['product_id'], [
//                    'quantity' => $count,
//                ]);
//            }else{
//                return CartFacade::session($token)->add($options['product_id'], $product->title, $product->price, $count ? $count : 1, ['size'=> $options['size'], 'colors' => $options['color']]);
//            }
//
//        } else {
//            return CartFacade::session($token)->add($options['product_id'], $product->title, $product->price, $count ? $count : 1, ['size'=> $options['size'], 'colors' => $options['color']]);
//        }
//    }

    public static function remove(Product $product, $count, $token, $options = []){
        if (!CartFacade::session($token)->get($options['product_id'])){
            return null;
        }

        if (CartFacade::session($token)->get($options['product_id'])->quantity == $count){
            return CartFacade::session($token)->remove($options['product_id']);
        } else {
            return CartFacade::session($token)->update($options['product_id'], [
                'quantity' => -$count
            ]);
        }
    }

    public static function deleteProduct(Product $product, $token, $options = []){
        if (!CartFacade::session($token)->get($options['product_id'])){
            return null;
        }
        return CartFacade::session($token)->remove($options['product_id']);
    }
}
