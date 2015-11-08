<?php

namespace App\Http\Requests;

class CreateTeamRequest extends Request
{
	public function messages()
	{
		return [
			'required' => 'Het :attribute veld is verplicht.',
			'email' => ':attribute Moet een geldig email adres zijn',
			'exists' => ':attribute moet een geldige optie zijn',
			'in' => ':attribute moet een geldige optie zijn',
			'max' => ':attribute mag maximaal :value zijn',
			'min' => ':attribute moet minimaal :value zijn',
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
			'naam' => 'required|unique:teams,name',
			'competition' => 'required|exists:competities,id',
			'team_grootte' => 'required|integer|min:3|max:8'
		];
	}
}
