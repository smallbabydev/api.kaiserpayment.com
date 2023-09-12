<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/prepayment', 'PaymentController@prePayment')->name('prePayment');
Route::post('/getReport', 'PaymentController@getReport')->name('getReport');
Route::post('/getCryptoPaymentAddress', 'FireBlocksController@getCryptoPaymentAddress')->name('getCryptoPaymentAddress');
Route::post('/getCryptoPaymentReport', 'FireBlocksController@getCryptoPaymentReport')->name('getCryptoPaymentReport');
