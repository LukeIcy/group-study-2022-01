<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_imgs', function (Blueprint $table) {
            $table->id();
            $table->longtext('image')->nullable()->comment('寵物照片');
            $table->bigInteger('animal_id')->nullable()->comment('對應寵物');
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
        Schema::dropIfExists('animal_imgs');
    }
}
