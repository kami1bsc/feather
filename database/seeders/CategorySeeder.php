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
            'category_name' => 'Australorp',
            'category_image' => 'categories/australorps.png',
        ]);

        Category::create([
            'category_name' => 'Barnvelder',
            'category_image' => 'categories/barnevelder.png',
        ]);

        Category::create([
            'category_name' => 'Bielefelder',
            'category_image' => 'categories/bielefelder.png',
        ]);        

        Category::create([
            'category_name' => 'Red Star',
            'category_image' => 'categories/breed-star-red.png',
        ]); 
        
        Category::create([
            'category_name' => 'Brahma',
            'category_image' => 'categories/breed-brahma.png',
        ]); 

        Category::create([
            'category_name' => 'Chantecler',
            'category_image' => 'categories/breed-chantecler.png',
        ]); 

        Category::create([
            'category_name' => 'Delaware',
            'category_image' => 'categories/breed-delaware.png',
        ]); 

        Category::create([
            'category_name' => 'Maran',
            'category_image' => 'categories/breed-maran.png',
        ]); 

    }
}
