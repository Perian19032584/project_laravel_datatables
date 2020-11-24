<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceHistory extends Migration{

    public function up(){
        Schema::create('balance_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sum');
            $table->string('commission')->default(0);
            $table->string('status');
            $table->string('id_user');
            $table->timestamps();
        });
    }

    public function down(){

    }
}
