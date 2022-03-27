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

	public function front($site){
		$data = array('site'=>$site);
		return view('verbs/front', $data);
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

	public function edit($id) {		
		$verbmodel = new verbmodel();
		$verb = $verbmodel->asObject()->find($id);
		if($verb == null) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} 
		$mundos = array('TEENS','KIDS');
		$tipos = array('IRREGULAR','REGULAR','PHRASAL');
		var_dump( substr($tipos[0],0,3));
		return view('verbs/edit', ['verb' => $verb,'mundos' => $mundos,'tipos' => $tipos]);
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
		return redirect()->to('/verbs/show');
	}

	public function update($id){
		$verbmodel = new VerbModel();
		$verb = $verbmodel->asObject()->find($id);
		if($verb == null) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} 
		$verbmodel->update($id, [
			'mundo' => $this->request->getPost('mundo'),
			'tipo' => $this->request->getPost('tipo'),
			'past' => $this->request->getPost('past'),
			'present' => $this->request->getPost('present'),
			'participle' => $this->request->getPost('participle'),
			'significado' => $this->request->getPost('significado'),
			'position' => $this->request->getPost('position')			
		]);
		
		return redirect()->to('/verbs/show');
	}

	public function delete($id){
		$verbmodel = new VerbModel();
		$verb = $verbmodel->asObject()->find($id);
		var_dump($verb);
		/*if($verb == null) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} */
		$result = $verbmodel->delete($id);
		var_dump($result);
		return redirect()->to('verbs/show');
	}

}

