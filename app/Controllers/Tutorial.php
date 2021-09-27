<?php

namespace App\Controllers;
use App\Models\TutorialModel;

class Tutorial extends BaseController
{
	public function index($site)
	{
		$TutInstance = new TutorialModel($db);
		$Tuts = $TutInstance->where('tipo',$site)->orderBy('position','ASC')->findAll();
		$Tuts = array(
			'items' => $Tuts,
			'site' => $site
		);	
		//var_dump($Songs);		
		return view('tutorial/index',$Tuts) ;
	}
}