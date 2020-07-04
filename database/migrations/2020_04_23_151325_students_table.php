<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();
            $table->string('ism');
            $table->string('familya');
            $table->string('ota_ism');
            $table->string('tugulgan_yil');
            $table->string('tugulgan_joy');
            $table->string('yashash_manzil');
            $table->softDeletes();
            $table->string('pass_ser', 5);
            $table->string('pass_nom', 10);


            $table->string('jinsi');
            // $table->string('yonalish_codi');
            $table->string('tell')->nullable();
            $table->string('uy_teli')->nullable();

            $table->unsignedBigInteger('oquv_turi_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('qabul_yili_id');
            $table->unsignedBigInteger('guruh_id');
            $table->unsignedBigInteger('yon_kod_id');

            $table->foreign('oquv_turi_id')->references('id')->on('oquv_turi'); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('qabul_yili_id')->references('id')->on('qabul_yili');
            $table->foreign('guruh_id')->references('id')->on('talaba_guruhlari');
            $table->foreign('yon_kod_id')->references('id')->on('yonalish_kodlari');


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
        Schema::dropIfExists('students');
    }
}
