<?php

namespace App\Controllers;
use App\Models\TutorialModel;

class Tutorial extends BaseController
{
	public function index($site)
	{
		$TutInstance = new TutorialModel($db);
		$Tuts = $TutInstance->where('tipotutorial','tutorial_'.$site)->orderBy('activityNumber','ASC')->findAll();
		$Tuts = array(
			'items' => $Tuts,
			'site' => $site
		);	
		//var_dump($Songs);		
		return view('tutorial/index',$Tuts) ;
	}
}