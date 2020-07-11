<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class YangiliklarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yangiliklar', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->boolean('active')->default('0');
            $table->text('desc');
            $table->text('smal_desc')->nullable();
            $table->string('image')->nullale();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cate_id');
            $table->string('count')->default('0');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cate_id')->references('id')->on('article_category');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yangiliklar');
    }
}
