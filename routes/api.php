<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stores', [StoreController::class, 'getStore']);

Route::get('/stores/{id}', [StoreController::class, 'getStoreByID']);

Route::get('/products', [ProductController::class, 'getProduct']);

Route::get('/products/{id}', [ProductController::class, 'getProductByID']);

