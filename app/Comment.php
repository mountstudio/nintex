<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id', 'comment', 'email', 'phone', 'name', 'user_id', 'parent_id', 'rating', 'product_id'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function users()
    {

    }
}
