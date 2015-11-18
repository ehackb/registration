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

	public function __construct($voornaam, $achternaam, $email, $activiteiten)
	{
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
		$this->email = $email;
		$this->activiteiten = $activiteiten;
		// TODO extra opties!!!
	}

	public function handle(RegistrationRepository $repository)
	{
		dd($this);
	}
}