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
	Route::get('clients/create-client-wizard', 'ClientController@createclientwizard')->name('clients.createclientwizard');
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
//Accessoire
	Route::post('accessoires/delete/{id}','AccessoireController@delete')->name('accessoires.delete');
	Route::get('accessoires/data', 'AccessoireController@data')->name('accessoires.data');
	Route::resource('accessoires', 'AccessoireController');
});


Route::group(['middleware' => ['web', 'auth']], function () {
//Interventions
	Route::get('interventions/create-accessoire-wizard', 'InterventionController@createaccessoirewizard')->name('interventions.createaccessoirewizard');

	Route::get('interventions/create-moto-wizard', 'InterventionController@createmotowizard')->name('interventions.createmotowizard');
	Route::get('interventions/data-accessoire', 'InterventionController@dataaccessoire')->name('interventions.dataaccessoire');
	Route::get('interventions/data-moto', 'InterventionController@datamoto')->name('interventions.datamoto');
	Route::post('interventions/delete/{id}','InterventionController@delete')->name('interventions.delete');
	Route::get('interventions/data-client', 'InterventionController@dataclient')->name('interventions.dataclient');
	Route::get('interventions/data', 'InterventionController@data')->name('interventions.data');
	Route::resource('interventions', 'InterventionController');
});




