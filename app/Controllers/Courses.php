<?php

namespace App\Controllers;
// Contdefined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\CourseModel;

class Courses extends BaseController
{
	public function index( $site)
	{
		$courseInstance = new CourseModel($db);
		$courses = $courseInstance->like('idnumber',$site,'after')->findAll();
		$courses = array('courses'=>$courses, 'courseId'=>'1', 'site' => $site);
		return view('courses/index',$courses);
	}
}
