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
	return redirect()->route('accueil');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('accueil')->middleware(['web', 'auth']);


Route::group(['middleware' => ['web', 'auth']], function () {
//Clients
	Route::post('clients/delete/{id}', 'ClientController@delete')->name('clients.delete');
	Route::get('clients/data', 'ClientController@data')->name('clients.data');
	Route::get('clients/data-client', 'ClientController@dataclient')->name('clients.dataclient');
	Route::resource('clients', 'ClientController');
});

Route::group(['middleware' => ['web', 'auth']], function () {
//Users
	Route::post('users/delete/{id}', 'UserController@delete')->name('users.delete');
	Route::get('users/data', 'UserController@data')->name('users.data');
	Route::resource('users', 'UserController');
});


Route::group(['middleware' => ['web', 'auth']], function () {
//Users
	Route::post('accessoires/delete/{id}','AccessoireController@delete')->name('accessoires.delete');
	Route::get('accessoires/data', 'AccessoireController@data')->name('accessoires.data');
	Route::resource('accessoires', 'AccessoireController');
});


Route::group(['middleware' => ['web', 'auth']], function () {
//Users
	Route::post('interventions/delete/{id}','InterventionController@delete')->name('interventions.delete');
	Route::get('interventions/data', 'InterventionController@data')->name('interventions.data');
	Route::resource('interventions', 'InterventionController');
});




