<?php
// Created by Wannes Gennar. All rights reserved

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'teams';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'size'];

	public function members()
	{
		return $this->hasMany(User::class);
	}
}