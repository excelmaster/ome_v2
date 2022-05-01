<?php

namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\LessonModel;

class Lessons extends BaseController
{
	public function index($site, $courseId, $courseNumber)
	{
		$lessonsInstance = new LessonModel($db);
		$lessons = $lessonsInstance->where('courseId',$courseId)->orderBy('lesson_number','ASC')->findAll();
		$lessons = array(			
			'lessons'=>$lessons, 
			'course'=>$courseNumber,
			'courseId'=>$courseId,
			'site' => $site
		);	
		return view('lessons/index',$lessons) ;
	}

}
