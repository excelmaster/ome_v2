<?php

namespace App\Controllers;
use App\Models\CourseModel;
use App\Models\ProgressModel;
use App\Models\UserModel;
class Courses extends BaseController
{	

	public function index( $site)
	{
		if($_SESSION['logged']==1){
			// progress status
			$userId =  $_SESSION['user_id'];
			$courseInstance = new ProgressModel($db);
			$courses = $courseInstance->worldProgress($userId, $site."%")->getResultArray();							
			$courses = array(
				'courses'=>$courses, 
				'courseId'=>'1', 
				'site' => $site,
				'tourvisit' => '99',
			);	

			// Page Tour	
			$userInfo = new UserModel($db);
			$tourVisits = $userInfo->getTourVisits($userId);
			$this->session->set('tourVisits', $tourVisits[0]['tourvisits']);
			$this->session->set('podcastName','');
			$this->session->set('objectId','');
			$this->session->set('tipo','');
			
			// set finished variable
			$hasExam = count(array_filter($courses['courses'], function($course) {
				return $course['isExam'] === "1" &&  $course['puntaje'] >= 0;
			})) > 0;
			
			if ($hasExam) {
				$this->session->set('coursefinished','1');
			} else {
				$this->session->set('coursefinished','0');
			}			

			return view('courses/index',$courses);			
		} else { 
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

	public function list(){
		echo 'lista';
		if ($_SESSION['logged'] == 1) {
			$courseInstance = new  CourseModel($db);
			$worlds = $courseInstance->readCourses();
			$data = array(
				'worlds' => $worlds,
			);
			$items = array('lessonId','lesson','course','courseId','mundo','mundoName');
			$this->session->remove($items);
			return view('courses/list', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
