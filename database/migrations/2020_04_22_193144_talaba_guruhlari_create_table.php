<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TalabaGuruhlariCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talaba_guruhlari', function (Blueprint $table) {
             $table->id();
            $table->string('name');
            $table->string('year');
            $table->boolean('arxive')->default('1');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->softDeletes();
            
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talaba_guruhlari');
    }
}
