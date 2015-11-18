<?php

// Created by Wannes Gennar. All rights reserved

class OptionsTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Options\Option::create([
			'name' => 'Ontbijten (€5)'
		]);

		\EhackB\Entities\Options\Option::create([
			'name' => 'Netwerkkabel (€5 10m)'
		]);
	}
}