<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
        'category_id' => 1,
        'title' => 'Cheese Burger',
        'price' => 5.99,
        'image' => 'burger1.jpg',
        'description' => 'Delicious cheese burger'
    ]);

    Product::create([
        'category_id' => 2,
        'title' => 'Pepperoni Pizza',
        'price' => 8.99,
        'image' => 'pizza1.jpg',
        'description' => 'Hot and crispy pizza'
    ]);

    Product::create([
        'category_id' => 3,
        'title' => 'Coca Cola',
        'price' => 1.50,
        'image' => 'drink1.jpg',
        'description' => 'Cold soft drink'
    ]);

    Product::create([
        'category_id' => 4,
        'title' => 'Chocolate Cake',
        'price' => 4.25,
        'image' => 'cake1.jpg',
        'description' => 'Sweet chocolate dessert'
    ]);

    Product::create([
        'category_id' => 5,
        'title' => 'Fried Chicken',
        'price' => 6.75,
        'image' => 'chicken1.jpg',
        'description' => 'Crispy fried chicken'
    ]);

    Product::create([
        'category_id' => 6,
        'title' => 'Club Sandwich',
        'price' => 5.50,
        'image' => 'sandwich1.jpg',
        'description' => 'Tasty sandwich'
    ]);
    }
}
