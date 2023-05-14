<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'T-shirt',
                'price' => 1540,
                'description' => 'lorem ipsum',
                'image' => 'https://picsum.photos/200'
            ],
            [
                'name' => 'Shirt',
                'price' => 2656,
                'description' => 'lorem ipsum',
                'image' => 'https://picsum.photos/200'
            ],
            [
                'name' => 'Pant',
                'price' => 5540,
                'description' => 'lorem ipsum',
                'image' => 'https://picsum.photos/200'
            ],
            [
                'name' => 'Banglai Lungi ',
                'price' => 4544,
                'description' => 'lorem ipsum',
                'image' => 'https://picsum.photos/200'
            ]
        ];
        Product::insert($products);
    }
}
