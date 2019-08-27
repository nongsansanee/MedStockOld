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


Route::get('/manage_access','ManageAccessController@index');

Route::get('/item_stock','ItemStockController@index');


Route::get('/unit_count','UnitCountController@index');

Route::post('/store_unit_count','UnitCountController@store');

// Route::get('/unit_count', function () {
//     return view('unitCount');
// });
