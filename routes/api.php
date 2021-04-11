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
//Route::get('products', 'ProductController@index');

//list single product
Route::get('product/{id}', 'ProductController@show');

//create new product
Route::post('product', 'ProductController@store');

//update product
Route::put('product', 'ProductController@store');

//delete product
Route::delete('product/{id}', 'ProductController@destroy');

Route::get('/products', [ProductController::class, 'index']);