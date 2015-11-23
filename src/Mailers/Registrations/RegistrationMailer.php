<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Mailers\Registrations;


use EhackB\Entities\Registrations\Registration;
use Fundamentals\Mailers\Mailer;

class RegistrationMailer extends Mailer
{
	public function registered(Registration $registration)
	{
		$this->send($registration->email, 'emails.registered', compact('registration'), 'Bedankt voor uw inschrijving!');
	}

	public function reregister($registration)
	{
		$this->send($registration->email, 'emails.reregister', compact('registration'), 'U moet opnieuw inschrijven voor eHackB!');
	}

	public function unregister(Registration $registration)
	{
		$this->send($registration->email, 'emails.unregister', compact('registration'), 'U bent uitgeschreven uit eHackB');
	}

	public function getSenderEmail()
	{
		return env('MAIL_ADDRESS');
	}

	public function getSenderName()
	{
		return env('MAIL_FROM');
	}
}