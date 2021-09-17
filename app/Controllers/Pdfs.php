<?php

namespace App\Controllers;
use App\Models\PdfModel;

class Pdfs extends BaseController
{
	public function index($site)
	{
		$PdfInstance = new PdfModel($db);
		$pdfs = $PdfInstance->where('categoria','pdf_'.$site)->orderBy('activityNumber','ASC')->findAll();
		$pdfs = array(
			'items' => $pdfs,
			'site' => $site
		);	
		//var_dump($pdfs);		
		return view('pdfs/index',$pdfs) ;
	}
}