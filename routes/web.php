<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\MainController@home')->name('home');

Route::get('/catalog', '\App\Http\Controllers\MainController@candlebase');

Route::get('/parafin', '\App\Http\Controllers\MainController@item_1_1');

Route::get('/orders', '\App\Http\Controllers\MainController@order');

Route::post('/', '\App\Http\Controllers\MainController@authorisation_check');
