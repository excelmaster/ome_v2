<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\CourseModel;

class Test extends BaseController
{
	public function index($site)
	{
		$data = array('site'=> $site);
		return view('test/index', $data);
	}
}
