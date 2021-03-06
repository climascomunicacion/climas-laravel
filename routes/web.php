<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/*
https://github.com/chinleung/laravel-multilingual-routes
*/ 

Route::middleware([])->group(function () {
    Route::multilingual('legal')->view('legal');
    Route::multilingual('cookies')->view('cookies');
    Route::multilingual('agencia')->view('agencia');
    Route::multilingual('contact', 'App\Http\Controllers\ContactController@showForm');
    Route::multilingual('contact', 'App\Http\Controllers\ContactController@storeForm')->method('post')->name('contact.save');
    Route::multilingual('services')->view('services');
    Route::multilingual('/')->view('home', ["page" => "home"]);
});

