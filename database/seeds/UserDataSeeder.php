<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserDataSeeder extends Seeder{
    public function run(){
        DB::table('users_data')->insert([
            'first_name' => "test1",
            'last_name' => "test1",
            'username' => "test1 test1",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test2",
            'last_name' => "test2",
            'username' => "test2 test2",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test3",
            'last_name' => "test3",
            'username' => "test3 test3",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test4",
            'last_name' => "test4",
            'username' => "test4 test4",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),

        ]);
        DB::table('users_data')->insert([
            'first_name' => "test5",
            'last_name' => "test5",
            'username' => "test5 test5",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test6",
            'last_name' => "test6",
            'username' => "test6 test6",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test7",
            'last_name' => "test7",
            'username' => "test7 test7",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test8",
            'last_name' => "test8",
            'username' => "test8 test8",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test9",
            'last_name' => "test9",
            'username' => "test9 test9",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
        DB::table('users_data')->insert([
            'first_name' => "test10",
            'last_name' => "test10",
            'username' => "test10 test10",
            'language_code' => "Ru",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now(),
        ]);
    }
}

