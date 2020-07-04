<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstbanner', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('small_desc');
            $table->string('desc');
            $table->string('slug');
            $table->string('image');
            $table->string('buttonname', 15);
            $table->softDeletes();
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
        Schema::dropIfExists('firstbanner');
    }
}
