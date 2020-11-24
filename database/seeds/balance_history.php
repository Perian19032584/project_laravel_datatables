<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class balance_history extends Seeder{

    public function run(){
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "3",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "3",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "5",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "5",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "2",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "7",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "no_active",
            'id_user' => "1",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "no_active",
            'id_user' => "1",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "9",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "active",
            'id_user' => "9",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
        DB::table('balance_history')->insert([
            'sum' => "2",
            'status' => "no_active",
            'id_user' => "9",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            'commission' => '0.5',
        ]);
    }
}
