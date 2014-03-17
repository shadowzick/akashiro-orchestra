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

Route::get('/', function()
{
	return View::make('pages.index');
	
});

Route::get('about', function(){
	return View::make('pages.about');
});

Route::get('gallery', function(){
	return View::make('pages.gallery');
});

Route::get('contact', function(){
	return View::make('pages.contact');
});

