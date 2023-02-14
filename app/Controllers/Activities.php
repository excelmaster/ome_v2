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

	public function list($lessonId,  $leccion){
		if ($_SESSION['logged'] == 1) {
			/* echo $this->session->get('mundoName'); */
			$activityInstance = new  ActivityModel($db);
			$activities = $activityInstance->readActivitiesxLesson($lessonId);
			$this->session->set('lessonId',$lessonId);
			$this->session->set('lesson',$leccion);
			$data = array(
				'activities' => $activities,				
			);			
			return view('activities/list', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

	public function new($lessonId)
	{
		if ($_SESSION['logged'] == 1) {
			$data = array(
				'lessonId' => $lessonId,
			);
			return view('activities/new', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

}
