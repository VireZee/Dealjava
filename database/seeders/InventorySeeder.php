<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            'name' => 'Flour',
            'price' => 5000,
            'amount' => 1000,
            'unit' => 'grams',
        ]);
        Inventory::create([
            'name' => 'Sugar',
            'price' => 3000,
            'amount' => 500,
            'unit' => 'grams',
        ]);
        Inventory::create([
            'name' => 'Milk',
            'price' => 7000,
            'amount' => 1,
            'unit' => 'litre',
        ]);
        Inventory::create([
            'name' => 'Eggs',
            'price' => 2000,
            'amount' => 12,
            'unit' => 'pieces',
        ]);
        Inventory::create([
            'name' => 'Salt',
            'price' => 1000,
            'amount' => 250,
            'unit' => 'grams',
        ]);
    }
}