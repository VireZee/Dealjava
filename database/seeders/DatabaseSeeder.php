<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(InventorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VariantSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(CartSeeder::class);
    }
}
