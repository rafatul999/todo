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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('aboutus',[App\Http\Controllers\AboutController::class,'index']);

Route::get('todos',[App\Http\Controllers\TodosController::class,'index']);
Route::get('create',[App\Http\Controllers\TodosController::class,'create']);
Route::post('store-todo',[App\Http\Controllers\TodosController::class,'store']);
Route::get('todos/{todo}',[App\Http\Controllers\TodosController::class,'show']);
Route::get('todos/{todo}/edit',[App\Http\Controllers\TodosController::class,'edit']);
Route::post('todos/{todo}/update-todo',[App\Http\Controllers\TodosController::class,'update']);
Route::get('todos/{todo}/delete',[App\Http\Controllers\TodosController::class,'destory']);
Route::get('todos/{todo}/complete',[App\Http\Controllers\TodosController::class,'complete']);


Route::get('contactus',function(){

    return view('contact');
});