<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Signals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signals', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('pair')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('target_1')->nullable();
            $table->string('target_2')->nullable();
            $table->string('target_3')->nullable();
            $table->string('buy')->nullable();
            $table->string('source')->nullable();
            $table->string('status')->nullable();
            $table->string('direction')->nullable();
            $table->integer('signal_id')->nullable();
            $table->tinyInteger('risk_filter')->nullable();
            $table->string('term')->nullable();
            $table->string('work_time')->nullable();
            $table->string('profit')->nullable();
            $table->string('target_1_time')->nullable();
            $table->string('target_2_time')->nullable();
            $table->string('target_3_time')->nullable();
            $table->string('buy_time')->nullable();
            $table->string('stop_loss')->nullable();
            $table->string('stop_loss_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('signals');
    }
}
