<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeliveryOption;

class DeliveryOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryOption::create([
            'store_id' => 6,
            'delivery_fee' => 'Free',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Local Pickup',
            'estimated_arrival_time' => time(),
        ]);

        DeliveryOption::create([
            'store_id' => 6,
            'delivery_fee' => '10',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Flat Rate Per Item',
            'estimated_arrival_time' => time(),
        ]);

        //

        DeliveryOption::create([
            'store_id' => 7,
            'delivery_fee' => 'Free',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Local Pickup',
            'estimated_arrival_time' => time(),
        ]);

        DeliveryOption::create([
            'store_id' => 7,
            'delivery_fee' => '10',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Flat Rate Per Item',
            'estimated_arrival_time' => time(),
        ]);

        //

        DeliveryOption::create([
            'store_id' => 8,
            'delivery_fee' => 'Free',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Local Pickup',
            'estimated_arrival_time' => time(),
        ]);

        DeliveryOption::create([
            'store_id' => 8,
            'delivery_fee' => '10',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Flat Rate Per Item',
            'estimated_arrival_time' => time(),
        ]);

        //

        DeliveryOption::create([
            'store_id' => 9,
            'delivery_fee' => 'Free',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Local Pickup',
            'estimated_arrival_time' => time(),
        ]);

        DeliveryOption::create([
            'store_id' => 9,
            'delivery_fee' => '10',
            'delivery_fee_currency' => '$',
            'delivery_type' => 'Flat Rate Per Item',
            'estimated_arrival_time' => time(),
        ]);
    }
}
