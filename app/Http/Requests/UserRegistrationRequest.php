<?php

namespace App\Http\Requests;

class UserRegistrationRequest extends Request
{
	public function messages()
	{
		return [
				'required' => 'Het :attribute veld is verplicht.',
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
			'email' => 'required|email',
			'competitie' => 'required|in:1,2,3',
				'team' => 'required|exists:teams,id',
			'options' => 'sometimes|in:1,2'
		];
	}
}
