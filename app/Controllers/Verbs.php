<?php

namespace App\Controllers;
use App\Models\VerbModel;

class Verbs extends BaseController
{
	public function index($site)
	{	
		$verbos = array(
			'site' => $site
		);
		return view('verbs/index', $verbos) ;
	}

	public function list($site, $type){
		$verbinstance = new VerbModel($db);
		$criterios = [ 'mundo' => $site, 'tipo'=>substr($type, 0, 3) ];
		$verbos = $verbinstance->where($criterios)->findAll();
		$data = array (
			'verbos' => $verbos,
			'site' => $site,
			'tipo' => $type
		);
		return view('verbs/list', $data);
	}
	public function read($site){
		$verbinstance = new  VerbModel($db);
		$verbos = $verbinstance->findAll();
		$data = array (
			'verbos' => $verbos,
			'site' => $site,			
		);
		return view('verbs/read', $data);
	}

}