<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use IonAuth\Controllers\Auth;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['cookie'];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		$db= \Config\Database::connect();

		//--------------------------------------------------------------------
		$this->session = \Config\Services::session();
		
		//--------------------------------------------------------------------
		// load ionauth library
		$this->ionAuth = new \IonAuth\Libraries\IonAuth();

		if($this->ionAuth->loggedIn() != 1){
			$this->session->set('logged',0);	
		} else {
			$this->session->set('logged',1);			
		}

		if($this->ionAuth->isAdmin() == 1){
			$this->session->set('mando',1);
		} else {
			$this->session->set('mando',0);
		}
	}

}
