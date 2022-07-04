<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\UserModel;
use App\Models\MdlsessionModel;

class Users extends BaseController
{
    public function index()
    {
        if ($_SESSION['logged'] == 1) {
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
                    //var_dump($user);
                    echo session()->get('ip');
                    echo $user['username'] . "<br>";
                    echo $user['id'] . "<br>";
                    echo $user['suspended'];
                    $activeMdl = $this->setUserSession($user);
                    echo "<br>ACTIVO" . $activeMdl;
                    $vista = $activeMdl == false ? "logmdl" : "hub";
                    echo "<br>" . $vista;
                    //return redirect()->to($vista);
                }
            }

            return view("login/index", $data);
        } else {
            $this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
            return redirect()->to('/auth/login');
        }
    }

    private function setUserSession($user)
    {
        if ($_SESSION['logged'] == 1) {
            // traer la session de moodle
            $model = new MdlsessionModel();
            $where = "sid is not null";

            $ssql = $model->where('id', $user['id'])
                ->where('firstip', $_SERVER['REMOTE_ADDR'])
                /* ->where('firstip', '181.137.113.22') */
                ->where($where)
                ->getCompiledSelect();

            $idMdl = $model->where('id', $user['id'])
                ->where('firstip', $_SERVER['REMOTE_ADDR'])
                /* ->where('firstip', '181.137.113.22') */
                ->where($where)
                ->first();

            echo "<br>";
            //echo $ssql;

            //echo($idMdl['id']);

            if (empty($idMdl)) {
                echo "no tiene sesion";
                return false;
            } else {
                echo "si tiene sesion";
                $data = [
                    'id' => $user['id'],
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname'],
                    'username' => $user['username'],
                    'isLoggedIn' => true,
                    'sid' => (empty($idMdl['sid'])) ? "0" :  $idMdl['sid'],
                    'ssql' => $ssql,
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'suspended' => $user['suspended'],
                ];

                session()->set($data);
                return true;
            }
        } else {
            $this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
