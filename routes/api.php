<?php

use App\Http\Controllers\CarCouponController;
use App\Http\Controllers\socialNetWorkController;
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


Route::resource('login/factory-pattern', socialNetWorkController::class);
Route::post('behavioural-patterens/stratgey', [CarCouponController::class, 'addCarCoupon']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
