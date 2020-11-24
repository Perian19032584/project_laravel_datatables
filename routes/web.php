<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/signals', 'SignalsController@render')->name('signals.render');
//Route::get('/test', 'SignalsController@test')->name('signals.price');

//Route::get('/users', 'UsersInfoController@render')->name('users.render');

//Route::get('/', 'HomeController@welcome')->name('welcome');




//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();//Класс не найден
//});
//
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signals_datatables', 'SignalsController@get_data_tables')->name('get_data_tables');

Route::get('/', "SignalsController@signals_show");
Route::get('/day/{parameter}', "SignalsController@sort_day_signals");


Route::get('/list_view', "UsersInfoController@list_user")->name('list_user');
Route::get('/edit_user/{user_id?}', "UsersInfoController@edit_user")->name('edit_user');
Route::get('/show_user/{user_id?}', "UsersInfoController@show_user")->name('show_user');
Route::get('/get_table_datatables', "UsersInfoController@get_table_datatables")->name('get_table_datatables');
Route::post('/change_user', "UsersInfoController@change_user")->name('change_user');
Route::get('/balance_user', "UsersInfoController@balance_user")->name('balance_user');

