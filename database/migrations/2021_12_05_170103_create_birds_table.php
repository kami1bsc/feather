<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('store_id')->nullable();
            $table->foreign('store_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('bird_name')->default("");
            // $table->string('bird_image')->default("");//Multiple Images
            $table->integer('bird_price')->default(0);
            $table->string('bird_price_currency')->default("$");
            $table->float('average_rating')->default(0.00);
            $table->text('description')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('sku')->default("");
            $table->string('tags')->default("");
            $table->string('breed')->default("");
            $table->string('hybrid')->default("");
            $table->string('clean_or_featheres_legs')->default("");
            $table->string('leg_color')->default("");
            $table->string('top_knot')->default("");
            $table->string('muffs')->default("");
            $table->string('beared')->default("");
            $table->string('no_of_toes')->default("");
            $table->string('skin_color')->default("");
            $table->string('comb_type')->default("");
            $table->string('lobes')->default("");
            $table->string('purpose')->default("");
            $table->string('broody')->default("");
            $table->string('weekly_production')->default("");
            $table->string('egg_color')->default("");
            $table->string('egg_size')->default("");
            $table->string('laying_maturity')->default("");
            $table->string('processing_age')->default("");
            $table->string('hardness')->default("");
            $table->string('forager')->default("");
            $table->string('personality')->default("");
            $table->string('livestock_conservency_status')->default("");
            $table->string('apa_class')->default("");
            $table->string('delivery_address')->default("");
            $table->string('delivery_type')->default("home_delivery");
            $table->string('delivery_days')->default("");
            $table->integer("delivery_charges")->default(0);
            $table->string('delivery_charges_currency')->default("$");
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
        Schema::dropIfExists('birds');
    }
}
