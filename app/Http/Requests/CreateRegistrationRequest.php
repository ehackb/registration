<?php

namespace App\Http\Requests;

class CreateRegistrationRequest extends Request
{
	protected $messages = [

	];

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
			'email' => 'required',
			'opties' => 'sometimes',
			'activiteiten' => 'sometimes',
			'team_optie' => 'sometimes',
			'team_naam' => 'required_with:team_optie',
				'team_competitie' => 'required_with:team_optie',
			'publiek_team' => 'sometimes'
		];
	}
}
