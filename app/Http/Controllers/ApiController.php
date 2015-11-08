<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;


use App\Competition;

class ApiController extends Controller
{
	public function teams($id)
	{
		$teams = $id == -1 ? [] : Competition::find($id)->teams();
		return response()->json($teams);
	}
}