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

Route::group(['prefix' => 'insert', 'as' => 'insert'], function(){
    Route::get('/', [App\Http\Controllers\InsertController::class, 'index']);
});
Route::group(['prefix' => 'viewAll', 'as' => 'viewAll'], function(){
    Route::get('/', [App\Http\Controllers\ViewAllController::class, 'index']);
});
Route::group(['prefix' => 'menu', 'as' => 'menu'], function(){
    Route::get('/', [App\Http\Controllers\MenuController::class, 'index']);
});