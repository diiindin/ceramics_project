<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

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
    return view('index');
});
Route::post('upload', [UploadController::class, 'index']);

Route::get('/send', function () {
    Mail::to('email@email.com')->send(new OrderMail());
    return new OrderMail();
});