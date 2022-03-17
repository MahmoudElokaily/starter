<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home')->middleware('verified');
Route::get('/', function () {
    return 'Home';
});

Route::get('/redirect/{service}','App\Http\Controllers\SocialController@redirect');
Route::get('/callback/{service}','App\Http\Controllers\SocialController@callback');
