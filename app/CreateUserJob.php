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

	}
}