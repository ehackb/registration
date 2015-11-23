<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Http\Requests\CreateRegistrationRequest;
use EhackB\Entities\Registrations\Registration;
use EhackB\Jobs\Entities\Registrations\CreateRegistrationJob;
use EhackB\Jobs\Entities\Teams\CreateTeamJob;
use EhackB\Mailers\Registrations\RegistrationMailer;

class RegistrationController extends Controller
{
	public function register(CreateRegistrationRequest $request)
	{
		$team = $this->dispatchFrom(CreateTeamJob::class, $request);
		$this->dispatchFrom(CreateRegistrationJob::class, $request, compact('team'));

		return redirect()->back()->with('message', 'Een mail met verdere informatie is naar uw adres verzonden');
	}

	public function purge(RegistrationMailer $mailer)
	{
		$duplicates = \DB::select('SELECT fname, lname FROM `registrations` GROUP BY fname, lname HAVING COUNT (*) > 1');
		foreach ($duplicates as $duplicate)
		{
			echo '<p>Removing duplicate ' . $duplicate->fname . ' ' . $duplicate->lname . '</p><br>';
			$registrations = Registration::where('fname', $duplicate->fname)->where('lname', $duplicate->lname)->get();
			$mailer->unregister($registrations->first());
			foreach ($registrations as $registration)
				$registration->delete();
		}
	}

	public function export()
	{
		return view('export');
	}
}