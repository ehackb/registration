<?php

namespace App\Http\Requests;

class CreateTeamRequest extends Request
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
			'naam' => 'required|unique:teams,name',
			'competition' => 'required|exists:competities,id',
			'team_grootte' => 'required|integer|min:3|max:8'
		];
	}
}
