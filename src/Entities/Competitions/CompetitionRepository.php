<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Competitions;


use Fundamentals\Entities\Repositories\BaseRepository;

class CompetitionRepository extends BaseRepository
{
	public function __construct(Competition $competition)
	{
		parent::__construct($competition);
	}
}