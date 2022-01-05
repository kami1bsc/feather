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
            $table->unsignedBigInteger('store_id')->nullable();
            $table->foreign('store_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');   
            $table->unsignedBigInteger('delivery_option_id')->nullable();
            $table->foreign('delivery_option_id')->references('id')->on('delivery_options')->onDelete('cascade');  
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')->references('id')->on('address_books')->onDelete('cascade');            
            $table->string('total_products')->default("");
            $table->string('total_quantity')->default("");
            $table->string('total_tax')->default("");
            $table->string('total_price')->default("");
            $table->string('subtotal')->default("");
            $table->string('shipping_fee')->default("");
            $table->string('grand_total')->default("");
            $table->string('payment_method_type')->default("");
            $table->string('is_paid')->default("");
            $table->string('is_scheduled')->default("");
            $table->string('schedule_date')->default("");
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
