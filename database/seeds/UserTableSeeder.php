<?php

// Created by Wannes Gennar. All rights reserved

class UserTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\EhackB\Entities\Users\User::create([
			'name' => 'root',
			'email' => 'foo@bar',
			'password' => 'toor'
		]);
	}
}