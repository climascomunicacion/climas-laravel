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
Route::middleware([])->group(function () {
    Route::multilingual('legal')->view('legal');
    Route::multilingual('cookies')->view('cookies');
    Route::multilingual('climas')->view('climas');
    Route::multilingual('contact')->view('contact');
    Route::multilingual('services')->view('services');
    Route::multilingual('/')->view('home', ["page" => "home"]);
});
