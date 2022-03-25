<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
//$routes->get('/login/auth', 'Auth::index');
$routes->get('/test/(:any)', 'Test::index/$1');
$routes->get('/courses/(:any)/', 'Courses::index/$1');
$routes->get('/lessons/(:any)/(:num)/(:num)', 'Lessons::index/$1/$2/$3');
$routes->get('/activities/(:any)/(:num)/(:num)/(:num)/(:num)', 'Activities::index/$1/$2/$3/$4/$5');
$routes->get('/content/(:any)/(:num)/(:num)/(:num)/(:num)/(:num)/(:any)/(:num)/(:any)', 'Content::index/$1/$2/$3/$4/$5/$6/$7/$8/$9');
$routes->get('/dict/(:any)/', 'Dict::index/$1');
$routes->get('/letter/(:any)/(:any)/', 'Dict::letter/$1/$2');
$routes->get('/scorm/(:any)/(:num)/(:num)/(:num)', 'Scorm::index/$1/$2/$3/$4');
$routes->get('/faq/(:any)', 'Faq::index/$1');
$routes->get('/pdfs/(:any)', 'Pdfs::index/$1');
$routes->get('/pdfcontent/(:any)/(:num)/(:num)/(:num)/(:num)/(:num)/(:any)/(:num)/(:any)', 'Pdfcontent::index/$1/$2/$3/$4/$5/$6/$7/$8/$9');
$routes->get('/music/(:any)', 'Music::index/$1');
$routes->get('/musicontent/(:any)/(:num)/(:num)/(:num)/(:num)/(:num)/(:any)/(:num)/(:any)', 'Musicontent::index/$1/$2/$3/$4/$5/$6/$7/$8/$9');
$routes->get('/tutorial/(:any)', 'Tutorial::index/$1');
$routes->get('/tutorialcontent/(:any)/(:num)/(:num)/(:num)/(:num)/(:num)/(:any)/(:num)/(:any)', 'Tutorialcontent::index/$1/$2/$3/$4/$5/$6/$7/$8/$9');
$routes->get('/verbs/(:any)', 'Verbs::index/$1');
$routes->get('/verblist/(:any)/(:any)', 'Verbs::list/$1/$2');
$routes->get('/verbread/(:any)/', 'Verbs::read/$1');
$routes->get('/verbcreate/(:any)/', 'Verbs::create/$1');

/* IonAuth */
$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
	$routes->add('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
	$routes->add('forgot_password', 'Auth::forgot_password');
	// $routes->get('/', 'Auth::index');
	// $routes->add('create_user', 'Auth::create_user');
	// $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
	// $routes->add('create_group', 'Auth::create_group');
	// $routes->get('activate/(:num)', 'Auth::activate/$1');
	// $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
	// $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
	// $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
	// $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
	// ...
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
