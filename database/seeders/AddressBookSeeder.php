<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AddressBook;
class AddressBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressBook::create([
            'user_id' => 2,
            'name' => 'Kamran Abrar',
            'province' => 'Punjab',
            'city' => 'Lahore',
            'address' => 'K1 Valencia Town Lahore',
        ]);

        AddressBook::create([
            'user_id' => 3,
            'name' => 'Asad Ali',
            'province' => 'Punjab',
            'city' => 'Lahore',
            'address' => 'K1 Valencia Town Lahore',            
            'address' => 'Flat 7 118 Blackhorse Grave London',
        ]);

        AddressBook::create([
            'user_id' => 4,
            'name' => 'Uzma Amjad',
            'province' => 'Punjab',
            'city' => 'Lahore',
            'address' => 'K1 Valencia Town Lahore',
            'address' => 'Flat 7 118 Blackhorse Grave London',
        ]);

        AddressBook::create([
            'user_id' => 5,
            'name' => 'Waqar Saleem Mughal',
            'province' => 'Punjab',
            'city' => 'Lahore',
            'address' => 'K1 Valencia Town Lahore',
            'address' => 'Flat 7 118 Blackhorse Grave London',
        ]);
    }
}
