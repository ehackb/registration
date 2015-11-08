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

		if ($team->competition->id != $competition->id)
			return redirect()->back()->withErrors('Ongeldige team/competitie combinatie');

		User::create([
				'fname' => $this->voornaam,
				'lname' => $this->achternaam,
				'email' => $this->email,
				'team_id' => $team->id
		]);

		return redirect()->back()->withInput();
	}
}