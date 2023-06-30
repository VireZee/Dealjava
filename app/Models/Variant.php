<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'additional_price'];
}