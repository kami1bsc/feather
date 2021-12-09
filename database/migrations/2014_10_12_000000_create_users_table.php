<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_id')->default("");
            $table->string('gmail_id')->default("");
            $table->string('apple_id')->default("");
            $table->string('name', 100)->default("");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verification_code')->default("");
            $table->string('phone', 30)->default("");
            $table->string('profile_image')->default("profile_images/default.png");
            $table->string('store_name', 100)->default("");
            $table->integer('is_business_verified')->default(0); //0 for false 1 for true and is just for business           
            $table->integer('wallet_balance')->default(0);
            $table->string('wallet_balance_currency', 10)->default('$');
            $table->string('credit_card_type')->default("");
            $table->string('name_on_card', 100)->default("");
            $table->string('card_number', 30)->default("");
            $table->string('expiry_date', 20)->default("");
            $table->string('cvv', 100)->default("");
            $table->string('business_document')->default("");
            $table->string('person_incharge', 100)->default("");
            $table->string('business_registration_number', 40)->default("");
            $table->string('business_address')->default("");
            $table->string('bank_account_name')->default("");
            $table->string('bank_account_number')->default("");
            $table->string('bank_name')->default("");
            $table->string('branch_code')->default("");
            $table->string('IBAN_number')->default("");
            $table->string('cheque_copy_image')->default("");
            $table->enum('type', USER_TYPES)->default(USER_TYPES['user']);
            $table->integer('switched_role')->default(0);
            $table->string('password')->default("");
            $table->string('token')->default("");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
