<?php 
namespace App\Controllers;

use App\Models\UserModel;
helper('cookie');

class Hub extends BaseController {

    public function index (){        
        $user = model(UserModel::class);
        $user->where('id', $_SESSION['user_id']);
        $actualUser = $user->findAll();
        $data = array(
            'actualUser' => $actualUser
        );
        var_dump($data);
        return view('hub/index', $data);
    }        
}