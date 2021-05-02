<?php

use Illuminate\Database\Seeder;

class DeliverySlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slots = [
          [
            'id' => 1,
            'name' => 'Weekdays Delivery',
            'description' => 'Delivery charge of $5 will be charged'
          ],
          [
            'id' => 2,
            'name' => 'Weekend Delivery',
            'description' => 'Delivery charge of $1 will be charged'
          ],
        ];

        foreach ($slots as $slot) {
          App\Models\DeliverySlot::updateOrCreate(
            ['id' => $slot['id'] ], 
          $slot);
        }
    }
}
