<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Competition;
use App\CreateUserJob;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UserRegistrationRequest;
use App\Team;

class RegistrationController extends Controller
{
	public function register(UserRegistrationRequest $request)
	{
		$this->dispatchFrom(CreateUserJob::class, $request);

		return redirect()->back()->withInput();
	}

	public function team(CreateTeamRequest $request)
	{
		$competition = Competition::find($request->get('competition'));

		if ($competition->maxteams >= $competition->teams->count())
			return redirect()->back()->withErrors(['Maximale hoeveelheid teams voor deze competitie is bereikt']);

		Team::create([
				'name' => $request->get('naam'),
				'competition_id' => $competition->id,
				'size' => $request->get('team_grootte')
		]);

		return redirect()->back();
	}
}