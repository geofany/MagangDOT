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

Route::get('task2', 'Task2Controller@index');
Route::get('task2/getCity/{id}', 'Task2Controller@getCity');
Route::get('task1', 'Task1Controller@index');
Route::post('task1/findNumber', 'Task1Controller@findNumber');
