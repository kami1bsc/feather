<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        User::create([ 
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'type' => USER_TYPES['user'],
            'password' => bcrypt('admin'),
        ]);

        //Users
        User::create([
            'name' => 'Kamran Abrar',
            'email' => 'kamranabrar90@gmail.com',
            'type' => USER_TYPES['user'],
            'phone' => '+923236691890',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Kamran Abrar',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Asad Ali',
            'email' => 'asad@gmail.com',
            'type' => USER_TYPES['user'],
            'phone' => '+923025258350',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Hafiz Asad Ali',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Uzma Amjad',
            'email' => 'uzma11@hotmail.com',
            'type' => USER_TYPES['user'],
            'phone' => '+923044977995',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Uzma Amjad',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Waqar Mughal',
            'email' => 'waqar@gmail.com',
            'type' => USER_TYPES['user'],
            'phone' => '+923004990981',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Waqar Mughal',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
        ]);

        //Provider

        User::create([
            'name' => 'Ahmad Ali',
            'email' => 'ahmad@gmail.com',
            'type' => USER_TYPES['store'],
            'phone' => '+923001292981',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Ahmad Ali',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
            'store_name' => 'Ahmad & Co.',
            'business_document' => 'business_documents/default.png',
            'person_incharge' => 'Ahmad Ali',
            'business_registration_number' => '12345678',
            'business_address' => 'K1 Valencia Town Lahore',
            'is_business_verified' => 1,
            'switched_role' => 1,
            'bank_account_name' => 'Ahmad Ali',
            'bank_account_number' => '1234 1234 1234 1234',
            'bank_name' => 'ABC Bank',
            'branch_code' => '12345',
            'IBAN_number' => '12345',
        ]);

        User::create([
            'name' => 'Saboor Ahmad',
            'email' => 'saboor@gmail.com',
            'type' => USER_TYPES['store'],
            'phone' => '+923023292981',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Saboor Ahmad',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
            'store_name' => 'Saboor & Co.',
            'business_document' => 'business_documents/default.png',
            'person_incharge' => 'Saboor Ahmad',
            'business_registration_number' => '12345678',
            'business_address' => 'K1 Valencia Town Lahore',
            'is_business_verified' => 1,
            'switched_role' => 1,
            'bank_account_name' => 'Ahmad Ali',
            'bank_account_number' => '1234 1234 1234 1234',
            'bank_name' => 'ABC Bank',
            'branch_code' => '12345',
            'IBAN_number' => '12345',
        ]);

        User::create([
            'name' => 'Azeem Ahmad',
            'email' => 'azeem@gmail.com',
            'type' => USER_TYPES['store'],
            'phone' => '+923001292981',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Azeem Ahmad',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
            'store_name' => 'Azeem & Co.',
            'business_document' => 'business_documents/default.png',
            'person_incharge' => 'Azeem Ahmad',
            'business_registration_number' => '12345678',
            'business_address' => 'K1 Valencia Town Lahore',
            'is_business_verified' => 1,
            'switched_role' => 1,
            'bank_account_name' => 'Ahmad Ali',
            'bank_account_number' => '1234 1234 1234 1234',
            'bank_name' => 'ABC Bank',
            'branch_code' => '12345',
            'IBAN_number' => '12345',
        ]);

        User::create([
            'name' => 'Ali Hassan',
            'email' => 'ali@gmail.com',
            'type' => USER_TYPES['store'],
            'phone' => '+923001292981',
            'wallet_balance' => 1000,
            'credit_card_type' => 'visa',
            'name_on_card' => 'Ali Hassan',
            'card_number' => '1234 1234 1234 1234',
            'expiry_date' => '09/25',
            'cvv' => '1234',
            'password' => bcrypt('12345678'),
            'store_name' => 'Hassan & Co.',
            'business_document' => 'business_documents/default.png',
            'person_incharge' => 'Hassan Ali',
            'business_registration_number' => '12345678',
            'business_address' => 'K1 Valencia Town Lahore',
            'is_business_verified' => 1,
            'switched_role' => 1,
            'bank_account_name' => 'Ahmad Ali',
            'bank_account_number' => '1234 1234 1234 1234',
            'bank_name' => 'ABC Bank',
            'branch_code' => '12345',
            'IBAN_number' => '12345',
        ]);
    }
}
