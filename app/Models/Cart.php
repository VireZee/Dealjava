<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}