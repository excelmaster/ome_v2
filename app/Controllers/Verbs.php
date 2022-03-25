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

	public function show(){
		$verbinstance = new  VerbModel($db);
		$verbos = $verbinstance->findAll();
		$data = array (
			'verbos' => $verbos,
			'site' => 'teens',			
		);
		return view('verbs/show', $data);
	}

	public function new() {
		return view('verbs/new');
	}

	public function create(){
		$verb = new VerbModel();
		$verb->insert([
			'mundo' => $this->request->getPost('mundo'),
			'tipo' => $this->request->getPost('tipo'),
			'past' => $this->request->getPost('past'),
			'present' => $this->request->getPost('present'),
			'participle' => $this->request->getPost('participle'),
			'significado' => $this->request->getPost('significado'),
			'position' => $this->request->getPost('position')			
		]);
		return redirect()->to('/verbs/index');
	}

}

