<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::create([
            'sale_id' => 'S-201007-171921',
            'product_id' => 1,
            'variant_id' => 2
        ]);
        Cart::create([
            'sale_id' => 'S-201007-171921',
            'product_id' => 2
        ]);
        Cart::create([
            'sale_id' => 'S-201007-171922',
            'product_id' => 6,
            'variant_id' => 4
        ]);
        Cart::create([
            'sale_id' => 'S-201007-171922',
            'product_id' => 6,
            'variant_id' => 5
        ]);
        Cart::create([
            'sale_id' => 'S-201007-171923',
            'product_id' => 8,
            'variant_id' => 9
        ]);
    }
}