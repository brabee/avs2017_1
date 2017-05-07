<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FormModalController extends Controller
{

	public function logregmodal()
	{
		/*
		$users = User::all();
		return $users;
	*/

		return view('auth/logregmodal');



	}

}

