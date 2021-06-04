<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;

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

Route::get('/paywithpaypal',[PayPalController::class , 'payWithPaypal']);
Route::post('/paypal',[PayPalController::class , 'postPaymentWithpaypal']);
Route::get('/getPaypal',[PayPalController::class , 'getPaymentStatus']);
// Route::post('paypal', array('as' => 'paypal','uses' => 'PayPalController@postPaymentWithpaypal',));
// Route::get('paypal', array('as' => 'status','uses' => 'PayPalController@getPaymentStatus',));