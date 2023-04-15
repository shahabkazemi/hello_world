<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('mobile', 11)->nullable(true)->comment('شماره موبایل کاربر');
            $table->string('telephone', 50)->nullable(true)->comment('شماره تلفن کاربر');
            $table->string('birthday', 10)->nullable(true)->comment('تاریخ تولد کاربر');
            $table->integer('age')->nullable(true)->comment('سن کاربر');
            $table->string('state', 20)->nullable(true)->comment('استان');
            $table->string('city', 20)->nullable(true)->comment('شهر');
            // $table->unsignedBigInteger('user_id')->comment('شناسه کاربر');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->comment('شناسه کاربر');

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
        Schema::dropIfExists('profiles');
    }
}
