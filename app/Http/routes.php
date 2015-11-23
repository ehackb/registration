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
})->name('home');

post('/register', 'RegistrationController@register')->name('register');

get('/admin', 'AuthController@admin')->middleware('auth.basic');

get('/overview', 'RegistrationController@export')->name('export');

get('/purge', 'RegistrationController@purge')->name('purge');