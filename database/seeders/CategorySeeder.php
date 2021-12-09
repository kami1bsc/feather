<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Chicken',
            'category_image' => 'categories/chicken.jpg',
        ]);

        Category::create([
            'category_name' => 'Parakeets',
            'category_image' => 'categories/parakeets.jpg',
        ]);

        Category::create([
            'category_name' => 'Cockatiels',
            'category_image' => 'categories/cockatiel.jpg',
        ]);        

        Category::create([
            'category_name' => 'Cockatoo',
            'category_image' => 'categories/cockatoo.jpg',
        ]); 
        
        // Category::create([
        //     'category_name' => 'Canaries',
        //     'category_image' => 'categories/canary.jpg',
        // ]); 

        // Category::create([
        //     'category_name' => 'Finches',
        //     'category_image' => 'categories/finch.jpg',
        // ]); 

        // Category::create([
        //     'category_name' => 'Lovebirds',
        //     'category_image' => 'categories/locebird.jpg',
        // ]); 

        // Category::create([
        //     'category_name' => 'Doves',
        //     'category_image' => 'categories/doves.jpg',
        // ]); 

        // Category::create([
        //     'category_name' => 'Toucans',
        //     'category_image' => 'categories/toucan.jpg',
        // ]);
        
        // Category::create([
        //     'category_name' => 'Poicephalus Parrots',
        //     'category_image' => 'categories/poicephalus-parrot.jpg',
        // ]);

        // Category::create([
        //     'category_name' => 'Pionus Parrots',
        //     'category_image' => 'categories/pionus-parrot.jpg',
        // ]);

        // Category::create([
        //     'category_name' => 'Amazon Parrots',
        //     'category_image' => 'categories/Amazon-parrots.jpg',
        // ]);
    }
}
