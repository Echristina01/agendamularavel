<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/event', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/event/create', [App\Http\Controllers\EventController::class, 'create']);
Route::post('/event/create/submit', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');
Route::get('/event/{id}/edit', [App\Http\Controllers\EventController::class, 'edit']);