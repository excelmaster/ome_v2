<?php

namespace App\Controllers;

use App\Models\CourseModel;

class Test extends BaseController
{
	public function index($site)
	{
		if ($_SESSION['logged'] == 1) {
			$data = array('site' => $site);
			return view('test/index', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
