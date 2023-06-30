<?php

namespace Database\Seeders;

use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale::create([
            'id' => 'S-201007-171921',
            'total_price' => 130000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'payment_method' => 'GOPAY'
        ]);
        Sale::create([
            'id' => 'S-201007-171922',
            'total_price' => 185000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'payment_method' => 'OVO'
        ]);
        Sale::create([
            'id' => 'S-201007-171923',
            'total_price' => 35000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'payment_method' => 'DANA'
        ]);
    }
}