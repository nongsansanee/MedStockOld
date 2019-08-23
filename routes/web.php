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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});



Route::get('/unit','UnitController@index');

Route::post('/store_unit','UnitController@store');



Route::get('/stock','StockController@index');

Route::post('/store_stock','StockController@store');
