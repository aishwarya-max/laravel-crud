<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('categories',[App\Http\controllers\HomeController::class,'index']);
ute::get('/',[App\Http\controllers\categoryController::class,'index']);
Route::get('categories',[App\Http\controllers\categoryController::class,'index']);
Route::get('categories',[App\Http\controllers\categoryController::class,'doc']);*/
Route::get('/',[App\Http\controllers\categoryController::class,'doc']);

Route::get('/login', [App\Http\controllers\AuthenticatedSessionController::class, 'create']);
Route::post('/login', [App\Http\controllers\AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [App\Http\controllers\AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('categories/create',[App\Http\controllers\categoryController::class,'create']);
Route::get('categories/view', [App\Http\controllers\categoryController::class, 'view']);
Route::post('categories/create',[App\Http\controllers\categoryController::class,'store']);
Route::get('categories/{id}/edit',[App\Http\controllers\categoryController::class,'edit']);
Route::put('categories/{id}/edit',[App\Http\controllers\categoryController::class,'update']);
Route::get('categories/{id}/delete',[App\Http\controllers\categoryController::class,'destroy']);

