<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_info', function (Blueprint $table) {
            $table->id();
            $table->string('color', 20)->comment('رنگ');
            // $table->unsignedBigInteger('car_id')->comment('شناسه خودرو');
            $table->foreignId('car_id')->references('id')->on('cars')->cascadeOnDelete();
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
        Schema::dropIfExists('cars_info');
    }
}
