<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\FaqModel;

class Faq extends BaseController
{
	public function index($site)
	{
		$faqInstance = new FaqModel($db);
		$faqs = $faqInstance->select('question,answer,order')->where('tipo',$site)->findAll();
		$faqs = array('faqs'=>$faqs,  'site' => $site);
		return view('faq/index',$faqs);
	}

}
