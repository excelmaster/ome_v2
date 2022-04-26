<?php 
namespace App\Controllers;

class Loginmoodle extends \IonAuth\Controllers\Auth {
    public function index (){
        if(!$this->ionAuth->loggedIn()){
            //redirect then to the login page
            return redirect()->to('/auth/login');
        } else {
            return redirect()->to('loginmoodle/index');
        }        
    }
    
    
    
}