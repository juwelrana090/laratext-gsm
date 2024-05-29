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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/get/brands','Api\ApiController@getBrands')->name('get.brands');
Route::get('/get/car/new_arrivals','Api\ApiController@getCarBy_new_arrivals')->name('get.car.new_arrivals');
Route::get('/get/car/best_selling','Api\ApiController@getCarBy_best_selling')->name('get.car.best_selling');
Route::get('/get/car/details/{id}','Api\ApiController@getCarDetails')->name('get.car.details');
