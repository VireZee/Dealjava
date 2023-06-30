<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['cart', 'total_price', 'created_at', 'payment_method'];

}
