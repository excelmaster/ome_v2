<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Login extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		return view('login/index');
	}

	public function auth(){
		$request = \Config\Services::request();
		$data = array(
			'username' => $request->getPostGet('username'),
			'password' => $request->getIPAddress()
		);
		return view('login/index', $data);
	}

}
