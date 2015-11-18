<?php

// Created by Wannes Gennar. All rights reserved

class ActivitiesTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Activities\Activity::create([
			'name' => 'Fifa (1v1)',
			'max' => 16
		]);

		\EhackB\Entities\Activities\Activity::create([
			'name' => 'Smash Bros WiiU (1v1)',
			'max' => 16
		]);

		\EhackB\Entities\Activities\Activity::create([
			'name' => 'Hearthstone (1v1)',
			'max' => 16
		]);

		// TODO corners!
	}
}