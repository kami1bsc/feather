<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirdInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bird_inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bird_id')->nullable();
            $table->foreign('bird_id')->references('id')->on('birds')->onDelete('cascade');
            $table->string('inventory_name')->default("");
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
        Schema::dropIfExists('bird_inventories');
    }
}
