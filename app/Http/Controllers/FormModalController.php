<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormModalController extends Controller
{

	public function logregmodal()
	{
		// return view('loginmodal');
		return view('auth/logregmodal');
	}

	public function loginmodal()
	{
		// return view('loginmodal');
		return view('auth/loginmodal');
	}

	public function registermodal()
	{
		// return view('registermodal');
		return view('auth/registermodal');
	}
}
