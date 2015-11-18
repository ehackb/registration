<?php

// Created by Wannes Gennar. All rights reserved

class ActivitiesTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Activities\Activity::create([
				'name' => 'Create corner',
				'max' => 0
		]);

		\EhackB\Entities\Activities\Activity::create([
				'name' => 'Hacking corner',
				'max' => 0
		]);
	}
}