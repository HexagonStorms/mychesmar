<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Homepage
Route::get('/', 'HomeController@home');

// Floor Plans
	Route::get('/floorplans/bryce', 'HomeController@bryce');
	Route::get('/floorplans/casandra', 'HomeController@casandra');
	Route::get('/floorplans/branton', 'HomeController@branton');
	Route::get('/floorplans/ellison', 'HomeController@ellison');
	Route::get('/floorplans/harley', 'HomeController@harley');
	Route::get('/floorplans/kendall', 'HomeController@kendall');
	Route::get('/floorplans/nolan', 'HomeController@nolan');
	Route::get('/floorplans/gallo', 'HomeController@gallo');
	Route::get('/floorplans/sheffield', 'HomeController@sheffield');


