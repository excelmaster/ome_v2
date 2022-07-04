<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\PdfModel;

class Pdfs extends BaseController
{
	public function index($site)
	{
		if ($_SESSION['logged'] == 1) {
			$PdfInstance = new PdfModel($db);
			$pdfs = $PdfInstance->where('categoria', 'pdf_' . $site)->orderBy('activityNumber', 'ASC')->findAll();
			$pdfs = array(
				'items' => $pdfs,
				'site' => $site
			);
			//var_dump($pdfs);		
			return view('pdfs/index', $pdfs);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
