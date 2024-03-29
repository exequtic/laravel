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
Route::get('/', 'Controller@index')->name('index');
Route::get('/about', 'Controller@about')->name('about');
Route::resource('/comments', 'ProjectController');
Route::get('/comments/{id}/delete', 'ProjectController@destroy')->name('comments.destroy');