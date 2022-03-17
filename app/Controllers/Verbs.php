<?php

namespace App\Controllers;

class Verbs extends BaseController
{
	public function index($site)
	{	
		$verbos = array(
			'site' => $site
		);
		return view('Verbs/index', $verbos) ;
	}
}