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


Route::get('form' ,[App\Http\Controllers\FormController::class, 'form']);

Route::post('store_data' ,[App\Http\Controllers\FormController::class, 'store_data']);

Route::post('update_data/{id}' ,[App\Http\Controllers\FormController::class, 'update_data']);


Route::get('show' ,[App\Http\Controllers\FormController::class, 'show']);

Route::get('delete/{id}' ,[App\Http\Controllers\FormController::class, 'delete']);

Route::get('edit/{id}' ,[App\Http\Controllers\FormController::class, 'edit']);