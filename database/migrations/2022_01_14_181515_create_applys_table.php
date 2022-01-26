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
            $table->string('contract')->comment('同意合約');
            $table->string('age')->comment('年齡滿20歲');
            $table->string('name')->comment('認養人真實姓名');
            $table->string('phone')->comment('連絡電話');
            $table->string('line')->comment('Line id');
            $table->string('fbName')->comment('FB連結或名稱');
            $table->string('address')->comment('所在地');
            $table->longText('myself')->comment('自我介紹');
            $table->string('situation')->nullable()->comment('申請狀態');
            $table->bigInteger('user_id')->nullable()->comment('對應申請人');
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
        Schema::dropIfExists('applys');
    }
}
