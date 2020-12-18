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

Route::get('todos', 'TodosController@index');

Route::get('todos/{todos}', 'TodosController@show');

Route::get('new-todos', 'TodosController@create');

Route::post('store-todos', 'TodosController@store');

Route::get('todos/{todos}/edit', 'TodosController@edit');

Route::post('todos/{todo}/update-todos', 'TodosController@update');

Route::get('todos/{todos}/delete', 'TodosController@destroy');

Route::get('todos/{todos}/complete', 'TodosController@complete');
