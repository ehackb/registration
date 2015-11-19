<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
	public function messages()
	{
		return [
			'required' => 'Het :attribute veld is verplicht.',
			'teamcapacity' => 'Het maximale aantal inschrijvingen voor deze competitie is bereikt'
		];
	}
}
