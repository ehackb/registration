<?php

// Created by Wannes Gennar. All rights reserved

class OptionsTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Options\Option::create([
			'name' => 'Ik wil ontbijten op eHackB (€5)'
		]);

		\EhackB\Entities\Options\Option::create([
			'name' => 'Ik wil een netwerkkabel kopen (€5 10m)'
		]);
	}
}