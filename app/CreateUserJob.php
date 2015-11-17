<?php
// Created by Wannes Gennar. All rights reserved

namespace App;


use Fundamentals\Jobs\Job;

class CreateUserJob extends Job
{
	/**
	 * @var
	 */
	private $voornaam;
	/**
	 * @var
	 */
	private $achternaam;
	/**
	 * @var
	 */
	private $email;
	/**
	 * @var
	 */
	private $competitie;
	/**
	 * @var
	 */
	private $team;

	public function __construct($voornaam, $achternaam, $email, $competitie, $team)
	{
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
		$this->email = $email;
		$this->competitie = $competitie;
		$this->team = $team;
	}

	public function handle()
	{
		$team = Team::find($this->team);
		$competition = Competition::find($this->competitie);

		if ($team != null && $team->competition->id != $competition->id)
			return redirect()->back()->withErrors('Ongeldige team/competitie combinatie');

		if ($team != null && $team->members->count() >= $team->size)
			return redirect()->back()->withErrors(['Maximale team capaciteit bereikt']);

		$externals = 0;
		foreach ($team->members as $member)
		{
			if (!str_contains($member->email, ['@student.ehb.be', '@ehb.be']))
				$externals = $externals + 1;
		}

		if ($externals >= 3)
			return redirect()->back()->withErrors(['Dit team heeft al 3 niet ehb studenten.']);

		User::create([
				'fname' => $this->voornaam,
				'lname' => $this->achternaam,
				'email' => $this->email,
				'team_id' => is_null($team) ? -1 : $team->id
		]);

		return redirect()->back()->withInput()->with('message', 'U bent geregistreerd!');
	}
}