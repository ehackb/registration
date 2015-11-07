<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


class ApiController extends Controller
{
	public function teams($id)
	{
		return response()->json([
			'Team 1',
			'Team 2',
			'Team 3',
			'Team 4'
		]);
	}
}