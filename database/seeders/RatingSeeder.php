<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rating;
class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating::create([
            'user_id' => 9,
            'bird_id' => 1,
            'rating_stars' => 4.5,
            'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Rating::create([
            'user_id' => 9,
            'bird_id' => 1,
            'rating_stars' => 4.5,
            'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
