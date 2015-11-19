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
}