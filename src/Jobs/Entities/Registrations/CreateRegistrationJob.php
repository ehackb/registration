<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Jobs\Entities\Registrations;


use EhackB\Entities\Registrations\RegistrationRepository;
use EhackB\Mailers\Registrations\RegistrationMailer;
use Fundamentals\Jobs\Job;

class CreateRegistrationJob extends Job
{
	private $voornaam;
	private $achternaam;
	private $email;
	private $activiteiten;
	private $opties;
	private $team;
	/**
	 * @var null
	 */
	private $team_competitie;

	public function __construct($voornaam, $achternaam, $email, $activiteiten = null, $opties = null, $team_competitie = null, $team)
	{
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
		$this->email = $email;
		$this->activiteiten = $activiteiten; // optional, defaults to null
		$this->opties = $opties; // optional, defaults to null
		$this->team = $team;
		$this->team_competitie = $team_competitie;
	}

	public function handle(RegistrationRepository $registrationRepository, RegistrationMailer $mailer)
	{
		$registration = $registrationRepository->create([
				'fname' => $this->voornaam,
				'lname' => $this->achternaam,
				'email' => $this->email,
				'ip_address' => $_SERVER['REMOTE_ADDR'],
				'team_id' => is_null($this->team) ? null : $this->team->id,
				'competition_id' => is_null($this->team_competitie) ? null : $this->team_competitie
		]);
		$registration->options()->sync(is_null($this->opties) ? [] : $this->opties);
		$registration->activities()->sync(is_null($this->activiteiten) ? [] : $this->activiteiten);
		$registration->save();

		$mailer->registered($registration); // send en email to the registered user
	}
}