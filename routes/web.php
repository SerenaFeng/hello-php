<?php

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

Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::any('/laravel/{id?}', function ($id=1) {
    return $id;
})->where('id', '[0-9]+')->middleware('laravel');
#Route::match(['get', 'post'], '/laravel', 'LaravelController@show');
