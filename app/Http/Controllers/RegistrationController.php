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
		return $this->dispatchFrom(CreateUserJob::class, $request);
	}

	public function team(CreateTeamRequest $request)
	{
		$competition = Competition::find($request->get('competition'));

		if ($competition->maxteams <= $competition->teams->count())
			return redirect()->back()->withErrors(['Maximale hoeveelheid teams voor deze competitie is bereikt']);

		Team::create([
				'name' => $request->get('naam'),
				'competition_id' => $competition->id,
				'size' => $request->get('team_grootte')
		]);

		if ($competition->maxteams <= $competition->teams->count())
		{
			\Mail::send('teamcapacity', ['competition' => $competition], function ($m)
			{
				$m->to(env('ADMIN_MAIL'), '')->subject('Team capaciteit bereikt!');
			});
		}

		return redirect()->back();
	}
}