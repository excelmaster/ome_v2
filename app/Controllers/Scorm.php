<?php

namespace App\Controllers;

use App\Models\CourseModel;

class Scorm extends BaseController
{
	public function index($site, $course, $lesson, $activity)
	{
		if ($_SESSION['logged'] == 1) {
			$data = [
				'site' => $site,
				'course' => $course,
				'lesson' => $lesson,
				'activity' => $activity
			];
			//var_dump($data);
			return view('scorm/index', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
