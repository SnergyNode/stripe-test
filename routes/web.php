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
Route::get('make/payment', 'PaymentController@paymentProcess')->name('make.payment');

Route::get('card_pay/success', 'PaymentController@paymentSuccess');

Route::get('card_pay/cancel', 'PaymentController@paymentFailure');
