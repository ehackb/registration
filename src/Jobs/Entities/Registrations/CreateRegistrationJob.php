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
	private $activiteiten;
	private $opties;
	private $team;

	public function __construct($voornaam, $achternaam, $email, $activiteiten = null, $opties = null, $team)
	{
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
		$this->email = $email;
		$this->activiteiten = $activiteiten; // optional, defaults to null
		$this->opties = $opties; // optional, defaults to null
		$this->team = $team;
	}

	public function handle(RegistrationRepository $repository)
	{
		dd($this);
	}
}