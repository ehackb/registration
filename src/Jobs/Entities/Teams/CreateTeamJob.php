<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Jobs\Entities\Teams;


use Fundamentals\Jobs\Job;

class CreateTeamJob extends Job
{
	private $team_optie;
	private $team_naam;
	private $publiek_team;
	private $opties;

	public function __construct($team_optie, $team_naam, $publiek_team = null, $opties = null)
	{
		$this->team_optie = $team_optie;
		$this->team_naam = $team_naam;
		$this->publiek_team = $publiek_team;
		$this->opties = $opties;
	}
	
	public function handle()
	{
		dd($this);
	}
}