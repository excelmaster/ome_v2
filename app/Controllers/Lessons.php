<?php

namespace App\Controllers;
use App\Models\LessonModel;

class Lessons extends BaseController
{
	public function index($site, $courseId, $courseNumber)
	{
		$lessonsInstance = new LessonModel($db);
		$lessons = $lessonsInstance->where('courseId',$courseId)->findAll();
		$lessons = array(			
			'lessons'=>$lessons, 
			'course'=>$courseNumber,
			'courseId'=>$courseId,
			'site' => $site
		);	
		return view('lessons/index',$lessons) ;
	}

}
