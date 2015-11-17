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
	return view('landing')->with('competitions', \App\Competition::all());
});

post('/register', ['uses' => 'RegistrationController@register', 'as' => 'register']);

post('/team/register', ['uses' => 'RegistrationController@team', 'as' => 'register.team']);

get('/competition/{id}/teams', ['uses' => 'ApiController@teams', 'as' => 'teams']);

get('/administration', ['uses' => 'AdminController@show']);