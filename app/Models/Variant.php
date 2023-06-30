<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = ['name', 'additional_price'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
