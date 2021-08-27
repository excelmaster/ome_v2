<?php

namespace App\Controllers;
use App\Models\DictModel;

class Dict extends BaseController
{
	public function index( $site)
	{
		$dictInstance = new DictModel($db);
		$dicts = $dictInstance->select('letra')->groupBy('letra')->where('tipo',$site)->findAll();
		$dicts = array('dicts'=>$dicts,  'site' => $site);
		return view('dict/index',$dicts);
	}

	public function letter( $site, $letra)
	{
		$dictInstance = new DictModel($db);
		$condicion = [
			'tipo' => $site,
			'letra' => $letra
		];
		$dicts = $dictInstance->select('termino')->groupBy('termino')->where($condicion)->findAll();
		$dicts = array('dicts'=>$dicts,  'site' => $site, 'letter' => $letra);
		return view('dict/letter',$dicts);
	}
}
