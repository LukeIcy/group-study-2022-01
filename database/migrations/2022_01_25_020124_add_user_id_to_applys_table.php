<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToApplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applys', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable()->comment('對應申請人');
            $table->bigInteger('animal_id')->nullable()->comment('對應寵物');
            $table->string('situation')->nullable()->comment('申請狀態');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applys', function (Blueprint $table) {
            //
        });
    }
}
