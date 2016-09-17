<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['web']], function () {
    Auth::routes();

    // Homepage route
    Route::get('/', 'HomeController@index');

    // City routes
    Route::get('cities', 'CitiesController@index');
    Route::get('cities/{city}', 'CitiesController@show');
    Route::post('cities/{city}/places', 'PlacesController@store');

    // Type routes
    Route::get('types', 'TypesController@index');
    Route::get('types/{type}', 'TypesController@show');

    // Place routes
    Route::get('places', 'PlacesController@index');
    Route::get('places/{place}', 'PlacesController@show');
    Route::get('places/{place}/edit', 'PlacesController@edit');
    Route::patch('places/{place}/update', 'PlacesController@update');
});
