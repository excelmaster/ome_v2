<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Test extends BaseController
{
	public function index($site)
	{
		$data = array('site'=> $site);
		return view('test/index', $data);
	}
}
