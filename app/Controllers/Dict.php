<?php

namespace App\Controllers;
use App\Models\DictModel;

class Dict extends BaseController
{
	public function index($site)
	{
		if ($_SESSION['logged'] == 1) {
			$dictInstance = new DictModel($db);
			$dicts = $dictInstance->select('letra')->groupBy('letra')->where('tipo', $site)->orderBy('letra', 'ASC')->findAll();
			$dicts = array('dicts' => $dicts,  'site' => $site);
			return view('dict/index', $dicts);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

	public function letter($site, $letra)
	{
		if ($_SESSION['logged'] == 1) {
			$dictInstance = new DictModel($db);
			$condicion = [
				'tipo' => $site,
				'letra' => $letra
			];
			$dicts = $dictInstance->select('termino')->groupBy('termino')->where($condicion)->orderBy('termino', 'ASC')->findAll();
			$dicts = array('dicts' => $dicts,  'site' => $site, 'letter' => $letra);
			return view('dict/letter', $dicts);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
