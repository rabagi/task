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
use App\Note;

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('create', 'HomeController@create');

Route::post('/tasks', 'HomeController@store');

Route::delete('/tasks/{id}', 'HomeController@delete')
    ->where('id', '[0-9]+');