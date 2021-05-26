<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;




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


Route::post('/cars/addModel',[CategoriesController::class,'addModelPost']);
Route::post('/cars/addMake',[CategoriesController::class,'addMakePost']);
Route::delete('/cars/deleteMake/{id}',[CategoriesController::class,'removeMake']);

Route::post('/cars/create',[CarsController::class,'store']);
Route::delete('/cars/delete/{id}',[CarsController::class,'destroy']);

Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);

Route::get('/user/{id}',[UserController::class,'getUser']);
// Auth::routes();
