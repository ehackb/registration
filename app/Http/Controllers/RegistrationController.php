<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Http\Requests\CreateRegistrationRequest;
use EhackB\Jobs\Entities\Registrations\CreateRegistrationJob;
use EhackB\Jobs\Entities\Teams\CreateTeamJob;

class RegistrationController extends Controller
{
	public function register(CreateRegistrationRequest $request)
	{
		$team = $this->dispatchFrom(CreateTeamJob::class, $request);
		$this->dispatchFrom(CreateRegistrationJob::class, $request, compact('team'));

		return redirect()->back()->with('message', 'Een mail met verdere informatie is naar uw adres verzonden');
	}

	public function export()
	{
		return view('export');
	}
}