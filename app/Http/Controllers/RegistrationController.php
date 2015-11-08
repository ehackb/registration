<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UserRegistrationRequest;
use App\Team;

class RegistrationController extends Controller
{
	public function register(UserRegistrationRequest $request)
	{
		return redirect()->back()->withInput();
	}

	public function team(CreateTeamRequest $request)
	{
		Team::create([
				'name' => $request->get('naam'),
				'competition_id' => $request->get('competition'),
				'size' => $request->get('team_grootte')
		]);

		return redirect()->back();
	}
}