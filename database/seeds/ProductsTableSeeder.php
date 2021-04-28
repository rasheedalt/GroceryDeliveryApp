<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
            'id' => 1,
            'display_name' => 'Water Melon',
            'tag' => 'Water melon',
            'quantity' => 4,
            'image' => 'https://images.pexels.com/photos/1313267/pexels-photo-1313267.jpeg',
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 2,
            'display_name' => 'Apple',
            'tag' => 'Water melon',
            'quantity' => 4,
            'image' => NULL,
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 3,
            'display_name' => 'Water Melon',
            'tag' => 'Water melon',
            'quantity' => 4,
            'image' => NULL,
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 4,
            'display_name' => 'Water Melon',
            'tag' => 'Water melon',
            'quantity' => 4,
            'image' => NULL,
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 5,
            'display_name' => 'Water Melon',
            'tag' => 'Water melon',
            'quantity' => 4,
            'image' => NULL,
            'price' => 200,
            'available' => TRUE
          ],

        ];

        @foreach ($products as $product) {
          App\Models\Product::updateOrCreate(['id' => $product['id'] ], $product);
        }
    }
}
