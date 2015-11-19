<?php

namespace App\Http\Requests;

class CreateRegistrationRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'voornaam' => 'required',
			'achternaam' => 'required',
			'email' => 'required|unique:registrations,email',
			'opties' => 'sometimes',
			'activiteiten' => 'sometimes',
			'team_competitie' => 'sometimes|exists:competitions,id|teamcapacity',
			'team_naam' => 'sometimes|unique:teams,name',
			'publiek_team' => 'sometimes'
		];
	}
}
