<?php

// Created by Wannes Gennar. All rights reserved

class CompetitiesTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Competitions\Competition::create([
			'name' => 'League of Legends',
			'max' => 80 // teams van 5
		]);

		\EhackB\Entities\Competitions\Competition::create([
				'name' => 'Counter Strike GO',
				'max' => 40 // teams van 5
		]);

		\EhackB\Entities\Competitions\Competition::create([
				'name' => 'Fifa (1v1)',
				'max' => 16,
				'teams' => false
		]);

		\EhackB\Entities\Competitions\Competition::create([
				'name' => 'Smash bros WiiU (1v1)',
				'max' => 64,
				'teams' => false
		]);

		\EhackB\Entities\Competitions\Competition::create([
				'name' => 'Hearthstone',
				'max' => 32,
				'teams' => false
		]);

		// TODO hearthstone limiet van X
	}
}