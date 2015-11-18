<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Http\Requests\CreateRegistrationRequest;
use EhackB\Jobs\Entities\Registrations\CreateRegistrationJob;

class RegistrationController extends Controller
{
	public function register(CreateRegistrationRequest $request)
	{
		$this->dispatchFrom(CreateRegistrationJob::class, $request);

		return redirect()->back();
	}
}