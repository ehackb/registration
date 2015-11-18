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
			'activiteiten' => 'required',
			'team_optie' => 'required',
			'team_naam' => 'required',
			'publiek_team' => 'sometimes'
		];
	}
}
