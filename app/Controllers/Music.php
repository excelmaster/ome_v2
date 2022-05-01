<?php

namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\MusicModel;

class Music extends BaseController
{
	public function index($site)
	{
		$SongsInstance = new MusicModel($db);
		$Songs = $SongsInstance->where('objectId',700)->where('tipomusic','music_' . $site)->orderBy('activityNumber','ASC')->findAll();
		$Songs = array(
			'items' => $Songs,
			'site' => $site
		);	
		//var_dump($Songs);		
		return view('music/index',$Songs) ;
	}
}