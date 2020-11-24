<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersData extends Migration{

    public function up(){
        Schema::create('users_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('is_bot')->nullable()->default(0);
            $table->char('first_name', 255);
            $table->char('last_name', 255);
            $table->char('username', 191);
            $table->char('language_code', 10);
            $table->timestamps();
        });
    }


    public function down(){
        Schema::drop('UsersData');
    }
}
