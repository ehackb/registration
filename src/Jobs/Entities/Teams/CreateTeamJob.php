<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Jobs\Entities\Teams;


use EhackB\Entities\Teams\TeamRepository;
use Fundamentals\Jobs\Job;

class CreateTeamJob extends Job
{
	private $team_optie;
	private $team_naam;
	private $publiek_team;
	private $opties;
	/**
	 * @var null
	 */
	private $team_competitie;

	public function __construct($team_optie = null, $team_naam = null, $team_competitie = null, $publiek_team = null, $opties = null)
	{
		$this->team_optie = $team_optie; // optional, defaults to null
		$this->team_naam = $team_naam; // optional, defaults to null
		$this->publiek_team = $publiek_team; // optional, defaults to null
		$this->opties = $opties; // optional, defaults to null
		$this->team_competitie = $team_competitie; // optional, defaults to null
	}
	
	public function handle(TeamRepository $repository)
	{
		$repository->create([
				'name' => $this->team_naam,
				'competition_id' => $this->team_competitie,
				'public' => $this->publiek_team == null,
				'token' => uniqid($this->team_naam)
		]);
		dd($this);
	}
}