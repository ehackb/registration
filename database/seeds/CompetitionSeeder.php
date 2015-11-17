<?php
// Created by Wannes Gennar. All rights reserved

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CompetitionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Competition::create([
				'name' => 'Ik neem geen deel aan competitie',
				'maxteams' => 0
		]);

		\App\Competition::create([
				'name' => 'Counter Strike',
				'maxteams' => 16
		]);

		\App\Competition::create([
				'name' => 'League of Legends',
				'maxteams' => 8
		]);

		\App\Competition::create([
				'name' => 'Anderen (niet competitie)',
				'maxteams' => 1
		]);

		\App\Competition::create([
				'name' => 'Corners',
				'maxteams' => 1
		]);
	}
}