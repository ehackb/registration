<?php
// Created by Wannes Gennar. All rights reserved

namespace App;


use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'competities';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'maxteams'];

	public function teams()
	{
		return $this->hasMany(Team::class);
	}
}