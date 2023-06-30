<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'amount', 'unit'];
}