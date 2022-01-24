<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('寵物姓名');
            $table->string('species')->nullable()->comment('寵物物種');
            $table->string('gender')->nullable()->comment('寵物性別');
            $table->integer('age')->nullable()->comment('寵物年齡');
            $table->string('persona')->nullable()->comment('寵物個性');
            $table->string('chara')->nullable()->comment('寵物特色');
            $table->string('health')->nullable()->comment('寵物健康');
            $table->string('fixed')->nullable()->comment('節育與否');
            $table->string('location')->nullable()->comment('所在地');
            $table->string('vaccine')->nullable()->comment('預防針');
            $table->longtext('adcond')->nullable()->comment('認養條件');
            $table->longtext('exhort')->nullable()->comment('對認養說的話');
            $table->bigInteger('user_id')->nullable()->comment('發布人/送養人');
            $table->string('launched')->default('上架中')->comment('上下架');
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
        Schema::dropIfExists('animals');
    }
}
