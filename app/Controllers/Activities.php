<?php

namespace App\Controllers;
use App\Models\ActivityModel;

class Activities extends BaseController
{
	public function index($site, $lessonId, $courseNumber, $lessonNumber, $courseId)
	{
		$ActivitiesInstance = new ActivityModel($db);
		$activities = $ActivitiesInstance->where('lessonId',$lessonId)->orderBy('activityNumber','ASC')->findAll();
		$activities = array(
			'lessons'=>$activities, 
			'course'=>$courseNumber, 
			'lesson'=>$lessonNumber, 
			'courseId'=>$courseId,
			'site' => $site
		);			
		return view('activities/index',$activities) ;
	}

}
