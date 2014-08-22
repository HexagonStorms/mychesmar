<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

//Homepage
	public function home()
	{
		return View::make('pages.home');
	}

// Floor Plans

	public function bryce()
	{
		return View::make('floorplans.bryce');
	}
	
	public function casandra()
	{
		return View::make('floorplans.casandra');
	}

	public function branton()
	{
		return View::make('floorplans.branton');
	}

	public function ellison()
	{
		return View::make('floorplans.ellison');
	}

	public function harley()
	{
		return View::make('floorplans.harley');
	}

	public function kendall()
	{
		return View::make('floorplans.kendall');
	}

	public function nolan()
	{
		return View::make('floorplans.nolan');
	}

	public function gallo()
	{
		return View::make('floorplans.gallo');
	}

	public function sheffield()
	{
		return View::make('floorplans.sheffield');
	}

}
