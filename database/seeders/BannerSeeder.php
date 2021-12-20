<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'banner_image' => 'banners/default.jpg',
        ]);

        Banner::create([
            'banner_image' => 'banners/default1.jpg',
        ]);

        Banner::create([
            'banner_image' => 'banners/default2.jpg',
        ]);

        Banner::create([
            'banner_image' => 'banners/default3.jpg',
        ]);
    }
}
