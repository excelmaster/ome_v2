<?php

namespace App\Controllers;
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
		return view('scorm/index', $data);
	}
}
