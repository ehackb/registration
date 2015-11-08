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

		if ($team->members->count() >= $team->size)
			return redirect()->back()->withErrors(['Maximale team capaciteit bereikt']);

		User::create([
				'fname' => $this->voornaam,
				'lname' => $this->achternaam,
				'email' => $this->email,
				'team_id' => is_null($team) ? -1 : $team->id
		]);

		return redirect()->back()->withInput();
	}
}