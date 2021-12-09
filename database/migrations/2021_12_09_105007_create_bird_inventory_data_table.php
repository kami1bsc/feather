<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirdInventoryDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bird_inventory_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bird_id')->nullable();
            $table->foreign('bird_id')->references('id')->on('birds')->onDelete('cascade');
            $table->unsignedBigInteger('inventory_id')->nullable();
            $table->foreign('inventory_id')->references('id')->on('bird_inventories')->onDelete('cascade');
            $table->string('inventory_date')->default("");
            $table->string('inventory_data')->default("");
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
        Schema::dropIfExists('bird_inventory_data');
    }
}
