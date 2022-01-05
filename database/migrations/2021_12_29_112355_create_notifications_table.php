<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notification_from')->nullable();
            $table->foreign('notification_from')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('notification_to')->nullable();
            $table->foreign('notification_to')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('bird_id')->nullable();
            $table->foreign('bird_id')->references('id')->on('birds')->onDelete('cascade');
            $table->string('notification_type')->default("");
            $table->string('notification')->default("");
            $table->string('notifimation_time')->default(time());
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
        Schema::dropIfExists('notifications');
    }
}
