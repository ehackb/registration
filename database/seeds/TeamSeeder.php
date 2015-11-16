<?php
// Created by Wannes Gennar. All rights reserved

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TeamSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Team::create([
			'name' => 'Super Smash Bros Wii U (1v1)',
			'competition_id' => 4,
			'size' => 16
		]);

		\App\Team::create([
			'name' => 'FIFA (1v1',
			'competition_id' => 4,
			'size' => 16
		]);

		\App\Team::create([
			'name' => 'HearthStone (1v1)',
			'competition_id' => 4,
			'size' => 32
		]);

		\App\Team::create([
			'name' => 'Hack corner',
			'competition_id' => 5,
			'size' => 30
		]);

		\App\Team::create([
			'name' => 'Create corner',
			'competition_id' => 5,
			'size' => 30
		]);
	}
}