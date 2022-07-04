<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\TutorialModel;

class Tutorial extends BaseController
{
	public function index($site)
	{
		if ($_SESSION['logged'] == 1) {
			$TutInstance = new TutorialModel($db);
			$Tuts = $TutInstance->where('tipotutorial', 'tutorial_' . $site)->orderBy('activityNumber', 'ASC')->findAll();
			$Tuts = array(
				'items' => $Tuts,
				'site' => $site
			);
			//var_dump($Songs);		
			return view('tutorial/index', $Tuts);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
