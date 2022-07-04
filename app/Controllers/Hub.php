<?php

namespace App\Controllers;
use App\Models\UserModel;

helper('cookie');

class Hub extends BaseController
{

    public function index()
    {
        if ($_SESSION['logged'] == 1) {
            $user = model(UserModel::class);
            $actualUser = $user->getUserData($_SESSION['user_id']);
            $data = array(
                'actualUser' => $actualUser
            );
            $isSuspended = $actualUser[0]['suspended'];
            if ($isSuspended == 1) {
                return view('hub/suspendido', $data);
            } else {
                return view('hub/index', $data);
            }
        } else {
            $this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
            return redirect()->to('/auth/login');
        }
    }
}
