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

Route::get('/', function () {
    return view('welcome');
});
Route::any('/laravel/{id}', function ($id=1) {
    return $id;
})->where('id', '[0-9]+')->middleware('laravel');
Route::post('/laravel', 'LaravelController@store');
Route::get('/laravel', 'LaravelController@show');
Route::resource('resources', 'ResourceController');
Route::get('/rsp', function () {
    return response("{\"name\": \"serena\"}", 200)
           ->header('Content-type','application/json')
           ->header('X-Header-One', 'Header Value');
});
