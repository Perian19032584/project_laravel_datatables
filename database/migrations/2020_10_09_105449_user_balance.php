<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserBalance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_balance', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('output')->nullable();
            $table->string('balance')->nullable();
            $table->string('input')->nullable();
            $table->string('date_operation')->nullable();
            $table->string('last_operation')->nullable();
;        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_balance');
    }
}
