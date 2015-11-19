<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Registrations;

use EhackB\Entities\Activities\Activity;
use EhackB\Entities\Competitions\Competition;
use EhackB\Entities\Options\Option;
use EhackB\Entities\Teams\Team;
use Fundamentals\Entities\Models\BaseModel;

class Registration extends BaseModel
{
	protected $table = 'registrations';

	protected $fillable = ['fname', 'lname', 'email', 'ip_address', 'team_id', 'competition_id'];
	
	public function options()
	{
		return $this->belongsToMany(Option::class);
	}

	public function activities()
	{
		return $this->belongsToMany(Activity::class);
	}

	public function team()
	{
		return $this->belongsTo(Team::class);
	}

	public function competition()
	{
		return $this->belongsTo(Competition::class);
	}
}