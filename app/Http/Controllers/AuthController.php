<?php
// Created by Wannes Gennar. All rights reserved

namespace App\Http\Controllers;

class AuthController extends Controller
{
	public function admin()
	{
		return view('admin');
	}
}