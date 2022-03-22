<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home')->middleware('verified');
Route::get('/', function () {
    return 'Home';
});

Route::get('/redirect/{service}','App\Http\Controllers\SocialController@redirect');
Route::get('/callback/{service}','App\Http\Controllers\SocialController@callback');
Route::group(['prefix' => 'offers'] , function () {
//    Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]] , function (){
//
//    });
    Route::get('create' , 'App\Http\Controllers\CrudController@create');
    Route::post('store' , 'App\Http\Controllers\CrudController@store') ->name('offers.store');
});
