<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Registrations;

use Fundamentals\Entities\Models\BaseModel;

class Registration extends BaseModel
{
	protected $table = 'registrations';

	protected $fillable = ['fname', 'lname', 'email', 'ip_address', 'team_id'];
}