<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applys', function (Blueprint $table) {
            $table->id();
            $table->string('contract');
            $table->string('age');
            $table->string('name');
            $table->string('phone');
            $table->string('line');
            $table->string('fbName');
            $table->string('address');
            $table->longText('myself');
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
        Schema::dropIfExists('applys');
    }
}
