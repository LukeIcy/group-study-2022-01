<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomecolumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 送養人資料一併加入uesrs資料表
            $table->longText('avatar')->nullable()->comment('頭像');
            $table->string('career')->nullable()->comment('中途年資');
            $table->string('adopnumber')->nullable()->comment('送養數量');
            $table->longText('experience')->nullable()->comment('中途項目');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
