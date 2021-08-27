<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login/index');
	}
}
