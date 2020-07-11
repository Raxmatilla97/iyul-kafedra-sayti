<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('familya');
            $table->string('sharif');
            $table->string('tugulgan_yil');
            $table->string('tugulgan_joy');
            $table->string('yashash_manzil');
            $table->string('ishlamoqda', 50);
            $table->unsignedBigInteger('fanlar_id');
            $table->softDeletes();


            
            $table->string('pass_ser', 5);
            $table->string('pass_nom', 10);


            $table->string('jinsi');
           
            $table->string('tell')->nullable();
            $table->string('uy_teli')->nullable();


            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('mavqe_id');

            $table->timestamps();   

            $table->foreign('fanlar_id')->references('id')->on('fanlar');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mavqe_id')->references('id')->on('mavqeylar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
