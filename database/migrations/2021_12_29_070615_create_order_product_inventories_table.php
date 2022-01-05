<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_product_id')->nullable();
            $table->foreign('order_product_id')->references('id')->on('order_products')->onDelete('cascade');
            $table->unsignedBigInteger('bird_inventory_id')->nullable();
            $table->foreign('bird_inventory_id')->references('id')->on('bird_inventories')->onDelete('cascade');
            $table->unsignedBigInteger('bird_inventory_data_id')->nullable();
            $table->foreign('bird_inventory_data_id')->references('id')->on('bird_inventory_data')->onDelete('cascade');
            $table->string('quantity')->default("");
            $table->string('subtotal')->default("");
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
        Schema::dropIfExists('order_product_inventories');
    }
}
