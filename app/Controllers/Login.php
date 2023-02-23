<?php

namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\UserModel;

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
		$username = $request->getPostGet('username');
		
		$authInstance = new UserModel($db);
		$idSession = $authInstance->where('username', $request->getPostGet('username'))->findAll();

		var_dump($idSession);
		$data = array(
			'username' => $request->getPostGet('username'),
			'password' => $request->getIPAddress(),
			'idsession' => $idSession
		);
		//return view('login/index', $data);
	}

}
