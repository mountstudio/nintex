<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_product extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'size', 'quantity', 'user_id'];
}
