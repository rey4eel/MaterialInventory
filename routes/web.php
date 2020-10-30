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



Auth::routes();

Route::get('/admin','UserController@index');
Route::get('/materials/create','MaterialsController@create');
Route::post('/materials','MaterialsController@store');
Route::get('/materials','MaterialsController@index');
Route::get('/materials/{material}','MaterialsController@show');
Route::get('/materials/{material}/edit','MaterialsController@edit');
Route::patch('/materials/{material}','MaterialsController@update');
Route::delete('/materials/{material}','MaterialsController@destroy');
