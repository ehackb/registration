<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Jobs\Entities\Registrations;


use EhackB\Entities\Registrations\RegistrationRepository;
use Fundamentals\Jobs\Job;

class CreateRegistrationJob extends Job
{
	private $voornaam;
	private $achternaam;
	private $email;
	private $opties;
	private $activiteiten;
	private $team_optie;
	private $team_naam;
	private $publiek_team;

	public function __construct($voornaam, $achternaam, $email, $activiteiten, $team_optie, $team_naam, $publiek_team = null, $opties = null)
	{
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
		$this->email = $email;
		$this->activiteiten = $activiteiten;
		$this->team_optie = $team_optie;
		$this->team_naam = $team_naam;
		$this->publiek_team = $publiek_team; // optional defaults to null
		$this->opties = $opties; // optional defaults to null
	}

	public function handle(RegistrationRepository $repository)
	{
		dd($this);
	}
}