<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Spaghetti Aglio Olio',
            'description' => 'Spaghetti that is cooked with onion and olive oil',
            'price' => 50000
        ]);
        Product::create([
            'name' => 'Chicken Biryani',
            'description' => 'Aromatic rice dish with tender chicken pieces',
            'price' => 70000
        ]);
        Product::create([
            'name' => 'Cheeseburger',
            'description' => 'Juicy beef patty topped with cheese and fresh vegetables',
            'price' => 80000
        ]);
        Product::create([
            'name' => 'Margherita Pizza',
            'description' => 'Classic pizza topped with tomato sauce, mozzarella, and basil',
            'price' => 60000
        ]);
        Product::create([
            'name' => 'Chocolate Brownie',
            'description' => 'Decadent chocolate dessert served with vanilla ice cream',
            'price' => 30000
        ]);
        Product::create([
            'name' => 'Beef Steak',
            'description' => 'Tender beef steak seasoned and grilled to perfection',
            'price' => 90000
        ]);
        Product::create([
            'name' => 'Caesar Salad',
            'description' => 'Fresh romaine lettuce tossed with creamy Caesar dressing',
            'price' => 40000
        ]);
        Product::create([
            'name' => 'Mango Smoothie',
            'description' => 'Refreshing smoothie made with ripe mangoes and yogurt',
            'price' => 35000
        ]);
        Product::create([
            'name' => 'Chicken Noodle Soup',
            'description' => 'Homemade soup with tender chicken and egg noodles',
            'price' => 45000
        ]);
        Product::create([
            'name' => 'Fruit Tart',
            'description' => 'Delicate pastry filled with fresh fruits and custard',
            'price' => 25000
        ]);
    }
}