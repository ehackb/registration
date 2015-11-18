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

	public function __construct($team_optie = null, $team_naam = null, $publiek_team = null, $opties = null)
	{
		$this->team_optie = $team_optie; // optional, defaults to null
		$this->team_naam = $team_naam; // optional, defaults to null
		$this->publiek_team = $publiek_team; // optional, defaults to null
		$this->opties = $opties; // optional, defaults to null
	}
	
	public function handle()
	{
		dd($this);
	}
}