<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MdlsessionModel;

class Users extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[6]|max_length[50]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email, password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'El usuario o la contraseña no son válidos',
                    'required' => 'La contraseña es requerida'
                ],
                'username' => [
                    'validateUser' => 'El usuario o la contraseña no son válidos',
                    'required' => 'El usuario es requerido'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] =  $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('username', $this->request->getVar('username'))
                    ->first();
                $this->setUserSession($user);
                return redirect()->to('hub');
            }
        }
        return view('login/index', $data);
    }

    private function setUserSession($user)
    {
        // traer la session de moodle
        $model = new MdlsessionModel();
        $idMdl = $model->where('id', $user['id'])
                ->where('firstip', $_SERVER['REMOTE_ADDR'])->getCompiledSelect();

        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'username' => $user['username'],
            'isLoggedIn' => true,
            'idmdl' => $idMdl,
        ];

        session()->set($data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
