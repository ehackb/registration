<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Http\Requests\CreateRegistrationRequest;

class RegistrationController extends Controller
{
	public function register(CreateRegistrationRequest $request)
	{
		// TODO
		return redirect()->back();
	}
}