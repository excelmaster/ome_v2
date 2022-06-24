<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\CourseModel;

class Scorm extends BaseController
{
	public function index($site, $course, $lesson, $activity)
	{
		$data = [
			'site' => $site,
			'course' => $course,
			'lesson' => $lesson,
			'activity' => $activity
		];
		//var_dump($data);
		return view('scorm/index', $data);
	}
}
