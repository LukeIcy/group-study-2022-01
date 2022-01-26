<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //新增一個role欄位，用來控制使用者權限
            $table->string('role')->nullable();
            // 送養人資料一併加入uesrs資料表
            $table->longText('avatar')->nullable()->comment('頭像');
            $table->string('career')->nullable()->comment('中途年資');
            $table->string('adopnumber')->nullable()->comment('送養數量');
            $table->longText('experience')->nullable()->comment('中途項目');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
