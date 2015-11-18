<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', function ()
{
	return view('register');
});

post('/register', 'RegistrationController@register')->name('register');

get('/admin', 'AuthController@admin')->middleware('auth.basic');