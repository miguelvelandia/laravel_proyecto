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

Route::resource('blog', 'BlogController');
Route::get('user', 'UserController@index');
Route::post('user', 'UserController@store');
Route::put('user/{id}', 'UserController@update');

Route::get('country', 'CountryController@index');
Route::post('country', 'CountryController@storeOneToOne');
Route::get('country/cities', 'CountryController@getCities');
Route::get('country/states', 'CountryController@getStates');

Route::get('state', 'StateController@index');
Route::post('state', 'StateController@storeOneToMany');
//Route::post('state', 'StateController@store');
Route::delete('state/{id}', 'StateController@delete');

Route::get('city', 'CityController@index');
Route::post('city', 'CityController@storeOneToMany');

Route::post('usuario', 'UserController@guardar');
