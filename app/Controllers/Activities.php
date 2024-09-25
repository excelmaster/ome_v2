<?php

namespace App\Controllers;
use App\Models\ActivityModel;
use App\Models\ProgressModel;
use App\Models\CourseModel;

class Activities extends BaseController
{

	public function index($site, $lessonId, $courseNumber, $lessonNumber, $courseId)
	{
		if($_SESSION['logged']==1){
			$user_id = $_SESSION['user_id'];
			$ActivitiesInstance = new ProgressModel($db); 
			
			$courseInstance = new CourseModel($db);
			$isExam = $courseInstance->courseIsExam($courseId);

			if ($isExam == 1) {
				$activities = $ActivitiesInstance->activityExamProgress($user_id, $site."%", $lessonId)->getResultArray();
				$viewName = 'activities/examIndex';
			} else {
				$activities = $ActivitiesInstance->activityProgress($user_id, $lessonId, $site."%")->getResultArray();
				$viewName = 'activities/index';
			}						

			$activities = array(
				'lessons'=>$activities, 
				'course'=>$courseNumber, 
				'lesson'=>$lessonNumber, 
				'courseId'=>$courseId,
				'site' => $site
			);							
			return view($viewName,$activities) ;
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

	public function list($lessonId,  $leccion){
		if ($_SESSION['logged'] == 1) {
			echo $this->session->get('mundoName');
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
