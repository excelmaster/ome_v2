<?php 
namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\MdlsessionModel;

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
    
    public function countSessions(){
        $mdlSession = model(MdlsessionModel::class);
        echo $mdlSession->getCountActiveSession($_SESSION['user_id'],0);
    }
    
}