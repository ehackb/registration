<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Registrations;

use EhackB\Entities\Activities\Activity;
use EhackB\Entities\Options\Option;
use Fundamentals\Entities\Models\BaseModel;

class Registration extends BaseModel
{
	protected $table = 'registrations';

	protected $fillable = ['fname', 'lname', 'email', 'ip_address', 'team_id'];
	
	public function options()
	{
		return $this->belongsToMany(Option::class);
	}

	public function activities()
	{
		return $this->belongsToMany(Activity::class);
	}
}