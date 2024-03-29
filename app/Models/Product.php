<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'price'];
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}