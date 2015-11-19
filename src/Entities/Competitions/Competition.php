<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Competitions;


use EhackB\Entities\Registrations\Registration;
use EhackB\Entities\Teams\Team;
use Fundamentals\Entities\Models\BaseModel;

class Competition extends BaseModel
{
	protected $table = 'competitions';

	public function participators()
	{
		return $this->hasMany(Team::class);
	}

	public function users()
	{
		return $this->hasMany(Registration::class);
	}
}