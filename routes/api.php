<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
<<<<<<< HEAD
| is assigned the "api" middleware group. Enjoy building your API! 
=======
| is assigned the "api" middleware group. Enjoy building your API!
>>>>>>> 69dfaa9707ef7cf7047d53e4d19a6eb485b9113f
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stores', [StoreController::class, 'getStore']);
<<<<<<< HEAD

Route::get('/stores/{id}', [StoreController::class, 'getStoreByID']);

=======
>>>>>>> 69dfaa9707ef7cf7047d53e4d19a6eb485b9113f
