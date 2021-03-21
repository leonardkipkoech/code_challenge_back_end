<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order_detailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Supplier_productcontroller;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Routes for Orders*/
//Route::get('/orders', [OrderController::class], 'index');
Route::get('/orders', 'OrderController@index');
Route::prefix('orders')->group( function(){
	   Route::post('/store','OrderController@store');
	   Route::put('/{id}','OrderController@update');
	   Route::delete('/{id}','OrderController@destroy');
});
/*End Routes for Orders*/


/*Routes for order_details*/
Route::get('/order-details', 'Order_detailController@index');
Route::prefix('order-details')->group( function(){
	   Route::post('/store','Order_detailController@store');
	   Route::put('/{id}','Order_detailController@update');
	   Route::delete('/{id}','Order_detailController@destroy');
});
/*End Routes for order_details*/

/*Routes for products*/
Route::get('/products', 'ProductController@index');
//Route::get('/products', [ProductController::class], 'index');
Route::prefix('products')->group( function(){
	   Route::post('/store','ProductController@store');
	   Route::put('/{id}','ProductController@update');
	   Route::delete('/{id}','ProductController@destroy');
});
/*End Routes for products*/

/*Routes for suppliers*/
Route::get('/suppliers', 'SupplierController@index');
Route::prefix('suppliers')->group( function(){
	   Route::post('/store','SupplierController@store');
	   Route::put('/{id}','SupplierController@update');
	   Route::delete('/{id}','SupplierController@destroy');
});
/*End Routes for suppliers*/

/*Routes for supplier_products*/
Route::get('/supplier-products', 'Supplier_productController@index');
Route::prefix('supplier-products')->group( function(){
	   Route::post('/store','Supplier_productController@store');
	   Route::put('/{id}','Supplier_productController@update');
	   Route::delete('/{id}','Supplier_productController@destroy');
});
/*End Routes for supplier_products*/
