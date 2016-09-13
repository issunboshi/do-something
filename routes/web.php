<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cities', 'CitiesController@index');
Route::get('cities/{city}', 'CitiesController@show');
Route::post('cities/{city}/places', 'PlacesController@store');

Route::get('types', 'TypesController@index');
Route::get('types/{type}', 'TypesController@show');

Route::get('places', 'PlacesController@index');
Route::get('places/{place}', 'PlacesController@show');
Route::get('places/{place}/edit', 'PlacesController@edit');
Route::patch('places/{place}/update', 'PlacesController@update');
