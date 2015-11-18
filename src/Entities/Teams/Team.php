<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Teams;


use Fundamentals\Entities\Models\BaseModel;

class Team extends BaseModel
{
	protected $table = 'teams';

	protected $fillable = ['name', 'competition_id', 'public', 'token'];
}