<?php

namespace App\Controllers;
use App\Models\FaqModel;

class Faq extends BaseController
{
	public function index($site)
	{
		if ($_SESSION['logged'] == 1) {
			$faqInstance = new FaqModel($db);
			$faqs = $faqInstance->select('question,answer,order')->where('tipo', $site)->findAll();
			$faqs = array('faqs' => $faqs,  'site' => $site);
			return view('faq/index', $faqs);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
