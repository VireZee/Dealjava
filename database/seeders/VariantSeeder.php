<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Variant;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Variant::create([
            'product_id' => 1,
            'name' => 'Original',
            'additional_price' => 0,
        ]);
        Variant::create([
            'product_id' => 1,
            'name' => 'Mushroom',
            'additional_price' => 10000,
        ]);
        Variant::create([
            'product_id' => 1,
            'name' => 'Chicken',
            'additional_price' => 20000,
        ]);
        Variant::create([
            'product_id' => 6,
            'name' => 'Rare',
            'additional_price' => 0,
        ]);
        Variant::create([
            'product_id' => 6,
            'name' => 'Medium',
            'additional_price' => 5000,
        ]);
        Variant::create([
            'product_id' => 6,
            'name' => 'Well Done',
            'additional_price' => 10000,
        ]);
        Variant::create([
            'product_id' => 7,
            'name' => 'Regular',
            'additional_price' => 0,
        ]);
        Variant::create([
            'product_id' => 7,
            'name' => 'Large',
            'additional_price' => 5000,
        ]);
        Variant::create([
            'product_id' => 8,
            'name' => 'Regular',
            'additional_price' => 0,
        ]);
        Variant::create([
            'product_id' => 8,
            'name' => 'Large',
            'additional_price' => 6000,
        ]);
        Variant::create([
            'product_id' => 10,
            'name' => 'Small',
            'additional_price' => 0,
        ]);
        Variant::create([
            'product_id' => 10,
            'name' => 'Large',
            'additional_price' => 7000,
        ]);
    }
}
