<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CoordinateController;
use App\Http\Controllers\MonumentController;
use App\Http\Controllers\CircleController;
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



Route::prefix('users')->group(function () {
	Route::post('/create',[UserController::class, 'createUser']);
	Route::post('/login',[UserController::class,'login']);
	Route::post('/password',[UserController::class,'changePassword']);
	Route::post('/update',[UserController::class,'updatePassword'])->middleware('auth');
	Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
});
Route::prefix('routes')->group(function () {
	Route::get('/list/{id}',[RouteController::class,"listRoute"]);
	Route::get('/prueba',[RouteController::class,"prueba"]);
});
Route::prefix('coordinates')->group(function () {
	Route::post('/list',[CoordinateController::class,"listCoordinates"]);
});
Route::prefix('monuments')->group(function () {
	Route::post('/list',[MonumentController::class,"listMonument"]);
});
Route::prefix('circles')->group(function () {
	Route::post('/list',[CircleController::class,"listCircle"]);
});


