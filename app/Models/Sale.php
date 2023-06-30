<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $casts = [
        'id' => 'string',
    ];
    protected $fillable = ['id', 'total_price', 'created_at', 'payment_method'];
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}