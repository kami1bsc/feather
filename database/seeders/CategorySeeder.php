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
            'category_image' => 'categories/australorps.jpg',
        ]);

        Category::create([
            'category_name' => 'Barnvelder',
            'category_image' => 'categories/barnevelder.jpg',
        ]);

        Category::create([
            'category_name' => 'Bielefelder',
            'category_image' => 'categories/bielefelder.jpg',
        ]);        

        Category::create([
            'category_name' => 'Red Star',
            'category_image' => 'categories/breed-star-red.jpg',
        ]); 
        
        Category::create([
            'category_name' => 'Brahma',
            'category_image' => 'categories/breed-brahma.jpg',
        ]); 

        Category::create([
            'category_name' => 'Chantecler',
            'category_image' => 'categories/breed-chantecler.jpg',
        ]); 

        Category::create([
            'category_name' => 'Delaware',
            'category_image' => 'categories/breed-delaware.jpg',
        ]); 

        Category::create([
            'category_name' => 'Maran',
            'category_image' => 'categories/breed-maran.jpg',
        ]); 

    }
}
