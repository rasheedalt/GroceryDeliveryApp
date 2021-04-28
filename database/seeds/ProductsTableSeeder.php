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
            'tag' => 'Apple',
            'quantity' => 4,
            'image' => 'https://images.pexels.com/photos/102104/pexels-photo-102104.jpeg',
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 3,
            'display_name' => 'Pine Apple',
            'tag' => '',
            'quantity' => 4,
            'image' => 'https://images.pexels.com/photos/947879/pexels-photo-947879.jpeg',
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 4,
            'display_name' => 'Orange',
            'tag' => 'Orange',
            'quantity' => 4,
            'image' => 'https://images.pexels.com/photos/54369/pexels-photo-54369.jpeg',
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 5,
            'display_name' => 'Cherry',
            'tag' => 'Cherry',
            'quantity' => 4,
            'image' => 'https://images.pexels.com/photos/109274/pexels-photo-109274.jpeg',
            'price' => 200,
            'available' => TRUE
          ],
          [
            'id' => 6,
            'display_name' => 'Banana',
            'tag' => 'Banana',
            'quantity' => 4,
            'image' => 'https://images.pexels.com/photos/1093038/pexels-photo-1093038.jpeg',
            'price' => 200,
            'available' => TRUE
          ],

        ];

        foreach ($products as $product) {
          App\Models\Product::updateOrCreate(['id' => $product['id'] ], $product);
        }
    }
}
