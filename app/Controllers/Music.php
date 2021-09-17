<?php

namespace App\Controllers;
use App\Models\MusicModel;

class Music extends BaseController
{
	public function index($site)
	{
		$SongsInstance = new MusicModel($db);
		$Songs = $SongsInstance->where('objectId',700)->orderBy('activityNumber','ASC')->findAll();
		$Songs = array(
			'items' => $Songs,
			'site' => $site
		);	
		//var_dump($Songs);		
		return view('music/index',$Songs) ;
	}
}