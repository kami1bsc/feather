<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->default("");            
            $table->string('order_status')->default("");
            $table->unsignedBigInteger('store_id')->default("");
            $table->foreign('store_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('user_id')->default("");
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
            $table->string('total_products')->default("");
            $table->string('total_quantity')->default("");
            $table->string('total_tax')->default("");
            $table->string('total_price')->default("");
            $table->string('billing_fname')->default("");
            $table->string('billing_lname')->default("");
            $table->string('billing_email')->default("");
            $table->string('billing_phone')->default("");
            $table->string('billing_nin')->default("");
            $table->string('billing_country')->default("");
            $table->string('billing_state')->default("");
            $table->string('billing_city')->default("");
            $table->string('billing_zip')->default("");
            $table->string('shipping_fname')->default("");
            $table->string('shipping_lname')->default("");
            $table->string('shipping_email')->default("");
            $table->string('shipping_phone')->default("");
            $table->string('shipping_nin')->default("");
            $table->string('shipping_country')->default("");
            $table->string('shipping_state')->default("");
            $table->string('shipping_city')->default("");
            $table->string('shipping_zip')->default("");
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
        Schema::dropIfExists('orders');
    }
}
