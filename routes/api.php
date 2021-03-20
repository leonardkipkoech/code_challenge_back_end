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
Route::get('/orders', [OrderController::class], 'index');
Route::prefix('orders')->group( function(){
	   Route::post('/store',[OrderController::class, 'store']);
	   Route::put('/{id}',[OrderController::class, 'update']);
	   Route::delete('/{id}',[OrderController::class, 'destroy']);
});
/*End Routes for Orders*/


/*Routes for order_details*/
Route::get('/order-details', [Order_detailController::class], 'index');
Route::prefix('order-details')->group( function(){
	   Route::post('/store',[Order_detailController::class, 'store']);
	   Route::put('/{id}',[Order_detailController::class, 'update']);
	   Route::delete('/{id}',[Order_detailController::class, 'destroy']);
});
/*End Routes for order_details*/

/*Routes for products*/
Route::get('/products', [ProductController::class], 'index');
Route::prefix('products')->group( function(){
	   Route::post('/store',[ProductController::class, 'store']);
	   Route::put('/{id}',[ProductController::class, 'update']);
	   Route::delete('/{id}',[ProductController::class, 'destroy']);
});
/*End Routes for products*/

/*Routes for suppliers*/
Route::get('/suppliers', [SupplierController::class], 'index');
Route::prefix('suppliers')->group( function(){
	   Route::post('/store',[SupplierController::class, 'store']);
	   Route::put('/{id}',[SupplierController::class, 'update']);
	   Route::delete('/{id}',[SupplierController::class, 'destroy']);
});
/*End Routes for suppliers*/

/*Routes for supplier_products*/
Route::get('/supplier-products', [Supplier_productController::class], 'index');
Route::prefix('supplier-products')->group( function(){
	   Route::post('/store',[Supplier_productController::class, 'store']);
	   Route::put('/{id}',[Supplier_productController::class, 'update']);
	   Route::delete('/{id}',[Supplier_productController::class, 'destroy']);
});
/*End Routes for supplier_products*/
