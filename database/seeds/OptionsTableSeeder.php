<?php

// Created by Wannes Gennar. All rights reserved

class OptionsTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Options\Option::create([
			'name' => 'Ik wil ontbijten op eHackB'
		]);

		\EhackB\Entities\Options\Option::create([
			'name' => 'Ik wil een netwerkkabel kopen'
		]);
	}
}