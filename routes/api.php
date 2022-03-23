<?php

use App\Http\Controllers\Api\CultureController;
use App\Http\Controllers\Api\CulturePriceController;
use App\Http\Controllers\Api\PlaceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/place', PlaceController::class);
Route::apiResource('/culture', CultureController::class);

Route::get('/culture-prices', CulturePriceController::class);

