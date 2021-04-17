<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list the products
//works
Route::get('/products', [ProductController::class, 'index']);

//list single product
//works
Route::get('/product/{id}', [ProductController::class, 'show']);

//create new product
Route::post('/product', [ProductController::class, 'store']);

//update product
Route::put('/product/{id}', [ProductController::class, 'update']);

//delete product
Route::delete('/product/{id}', [ProductController::class, 'destroy']);