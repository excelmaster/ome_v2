<?php

namespace App\Controllers;
use App\Models\ActivityModel;

class Activities extends BaseController
{

	public function index($site, $lessonId, $courseNumber, $lessonNumber, $courseId)
	{
		if($_SESSION['logged']==1){
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
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

}
