<?php 
namespace App\Controllers;

use App\Models\UserModel;
helper('cookie');

class Hub extends BaseController {

    public function index (){        
        $user = model(UserModel::class);        
        $actualUser = $user->getUserData($_SESSION['user_id']);
        $data = array(
            'actualUser' => $actualUser
        );
        $isSuspended = $actualUser[0]['suspended'];
        If($isSuspended == 1 ){
            return view('hub/suspendido', $data);
        } else  {
            return view('hub/index', $data);
        }
    }        
}