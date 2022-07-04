<?php

namespace App\Controllers;

use App\Models\MusicModel;

class Music extends BaseController
{
	public function index($site)
	{
		if ($_SESSION['logged'] == 1) {
			$SongsInstance = new MusicModel($db);
			$Songs = $SongsInstance->where('objectId', 700)->where('tipomusic', 'music_' . $site)->orderBy('activityNumber', 'ASC')->findAll();
			$Songs = array(
				'items' => $Songs,
				'site' => $site
			);
			//var_dump($Songs);		
			return view('music/index', $Songs);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
