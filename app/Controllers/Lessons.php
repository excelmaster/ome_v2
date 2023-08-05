<?php

namespace App\Controllers;
use App\Models\LessonModel;
use App\Models\ProgressModel;

class Lessons extends BaseController
{
	public function index($site, $courseId, $courseNumber)
	{
		$userId =  $_SESSION['user_id'];
		$lessonsInstance = new ProgressModel($db);		
		$lessons = $lessonsInstance->lessonProgress($userId, $site, $courseId)->getResultArray();		
		$lessons = array(			
			'lessons'=>$lessons, 
			'course'=>$courseNumber,
			'courseId'=>$courseId,
			'site' => $site
		);	
		return view('lessons/index',$lessons) ;		
	}

	public function list($courseId, $mundoName){
		echo 'lecciones para mundo ' . $courseId;
		if ($_SESSION['logged'] == 1) {
			$lessonInstance = new  LessonModel($db);
			$lessons = $lessonInstance->readLessonsxCourse($courseId);
			//variables de sesion
			$this->session->set('courseId', $courseId);
			$this->session->set('mundoName', $mundoName);
			//$items = array('le','mundoName');
			//$this->session->remove($items);
			$data = array(
				'lessons' => $lessons,				
			);
			return view('lessons/list', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

}
