<?php

// Created by Wannes Gennar. All rights reserved

class CompetitiesTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Competitions\Competition::create([
			'name' => 'League of Legends',
			'max' => 80
		]);

		\EhackB\Entities\Competitions\Competition::create([
			'name' => 'Counter Strike GO',
			'max' => 40
		]);
	}
}