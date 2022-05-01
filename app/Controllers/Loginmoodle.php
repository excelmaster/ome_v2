<?php 
namespace App\Controllers;


class Loginmoodle extends \IonAuth\Controllers\Auth {
    public function index (){
        
        if(!$this->ionAuth->loggedIn()){            
            //redirect then to the login page
            return view('auth/');
        } else {
            echo 'desde loginmoodle';
            if($_SESSION['numberOfSessions'] > 0){
                return view('hub');
            } else {
                return view('loginmoodle');
            }
            
        }        
    }
    
    
    
}