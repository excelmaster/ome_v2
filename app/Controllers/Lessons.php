<?php

namespace App\Controllers;
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

	public function list($courseId, $mundo){
		echo 'lecciones para mundo ' . $courseId;
		if ($_SESSION['logged'] == 1) {
			$lessonInstance = new  LessonModel($db);
			$lessons = $lessonInstance->readLessonsxCourse($courseId);
			//variables de sesion
			$this->session->set('courseId', $courseId);
			$this->session->set('mundo', $mundo);
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
