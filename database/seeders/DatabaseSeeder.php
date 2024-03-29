<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AddressBookSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BirdSeeder::class);
        $this->call(BirdImageSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(DeliveryOptionSeeder::class);
    }
}
