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

Route::get('/manage_access_user','ManageAccessUserController@index');


Route::get('/item_stock','ItemStockController@index');


Route::get('/unit_count','UnitCountController@index');

Route::post('/store_unit_count','UnitCountController@store');

// Route::post('/store_stock_admin','ManageAccessController@store');

Route::post('/store_stock_admin','StockAdminController@store');



Route::get('/manage_item_type','ManageStockCategoriesController@index');
Route::post('/manage_item_type','ManageStockCategoriesController@store');

// Route::get('/manage_item_type', function () {
//     return view('manageItemType');
// });

Route::get('/add_item', function () {
    return view('addItem');
});

// Route::post('/store_stock_admin', function (Illuminate\Http\Request $request) {
//     return $request->all();
// });


Route::get('/cut_stock', function () {
    return view('cutStock');
});

Route::get('/get_category', function () {

    $categorys = array("กระดาษ","เครื่องเขียน");
    return $categorys;
    return "test get_category ";
});


Route::post('/get_category', function (Illuminate\Http\Request $request) {

   $Stock_categorys = \App\Stock_category::where('stock_id',$request->id)->get();
   if(empty($Stock_categorys)){
    
        return "0";
     }

     return $Stock_categorys;

});

Route::post('/add_item_stock', function (Illuminate\Http\Request $request) {
    return $request->all();
});


// Route::post('/get_category/{id}','ManageStockCategoriesController@show');