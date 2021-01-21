<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
Route::get('events', [ApiController::class,'getAllEvents']);
Route::get('events/{id}', [ApiController::class,'getEvent']);
Route::post('events', [ApiController::class,'createEvent']);
Route::put('events/{id}', [ApiController::class,'updateEvent']);
Route::delete('events/{id}',[ApiController::class,'deleteEvent']);