<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Http\Requests\UserRegistrationRequest;

class RegistrationController extends Controller
{
	public function register(UserRegistrationRequest $request)
	{
		return redirect()->back()->withInput();
	}

	public function team()
	{

	}
}