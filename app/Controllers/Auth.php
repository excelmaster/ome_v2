<?php namespace App\Controllers;

class Auth extends \IonAuth\Controllers\Auth
{
    public function index() {
        if(!$this->ionAuth->loggedIn()){
            //redirect then to the login page
            return view('/auth/login');
        } else {
            return view('/loginmoodle/index');
        }
    }

    public function create_user(){
        if(!$this->ionAuth->loggedIn()){
            //redirect then to the login page
            return redirect()->to('/auth/login');
        } else {
            return view('/login/create_user');
        }
    }
}