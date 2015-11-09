<?php

namespace App\Http\Requests;

class UserRegistrationRequest extends Request
{
	public function messages()
	{
		return [
				'required' => 'Het :attribute veld is verplicht.',
				'email' => ':attribute Moet een geldig email adres zijn',
				'exists' => ':attribute moet een geldige optie zijn',
				'in' => ':attribute moet een geldige optie zijn',
		];
	}

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
				'email' => 'required|email|student',
				'competitie' => 'required|exists:competities,id',
				'team' => 'sometimes|exists:teams,id',
			'options' => 'sometimes|in:1,2'
		];
	}
}
