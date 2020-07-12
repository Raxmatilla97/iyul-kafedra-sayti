<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GallereyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallereya', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('familya_ism', 255);
            $table->string('count', 50)->nullable('0');
            $table->string('narx', 50)->nullable();
            $table->string('chizilgan_yil', 50);
            $table->string('image');
            $table->text('desc');
            $table->string('addres');
            $table->string('tell');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->softDeletes();


            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallereya');
    }
}
