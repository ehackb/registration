<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Teams;


use Fundamentals\Entities\Repositories\BaseRepository;

class TeamRepository extends BaseRepository
{
	public function __construct(Team $team)
	{
		parent::__construct($team);
	}
}