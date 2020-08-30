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

Route::get('/', function () {
    return view('welcome');
});

Route::get('laba-diena/labas', function () {
    return 'LABAS';
});

Route::get('viso-gero', function () {
    return view('viso.geras');
});

Route::get('zirafa', 'AfrikaController@zirafa');

Route::get('liutas/{px}', 'AfrikaController@simba');

Route::get('count/sum/{first}/{second}', 'CountController@sum');
Route::get('count/diff/{first}/{second}', 'CountController@diff');
Route::get('count/multi/{first}/{second}', 'CountController@multi');
Route::get('count/div/{first}/{second}', 'CountController@div');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
