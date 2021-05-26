<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

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

    Route::get('/cars',[CarsController::class,'index']);
Route::get('/', function () {
    $posts = ['astronomy'=>'lorem10', 'physics'=>'lorem15', 'IT'=>'lorem20'];

    return view('welcome');
});
Route::get('/home',[HomeController::class,'index']); 
Route::get('/posts',[Posts::class , 'posts']);

Route::get('/cars/create',[CarsController::class,'create']);
Route::post('/cars/create',[CarsController::class,'store']);
Route::get('/cars/carOptions',[CarsController::class,'getCarOptions']);
Route::get('/cars/details/{car}',[CarsController::class,'show']);
Route::get('/cars/edit/{car}',[CarsController::class,'edit']);
Route::post('/cars/edit/{car}',[CarsController::class,'update']);
Route::delete('/cars/delete/{id}',[CarsController::class,'destroy']);

Route::get('/cars/addMake',[CategoriesController::class,'addMake']);
Route::post('/cars/addModel',[CategoriesController::class,'addModelPost']);
Route::post('/addCategory',[CategoriesController::class,'store']);
Route::post('/cars/addMake',[CategoriesController::class,'addMakePost']);

Route::post('/logout', [LoginController::class,'logout']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
