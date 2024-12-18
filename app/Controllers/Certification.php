<?php 

namespace App\Controllers;
use App\Models\UserModel;

class Certification extends BaseController
{
    public function index()  {
        if ($_SESSION['logged']=1) {
            $dbInstance = new UserModel($db);            
            $nombre = $dbInstance->getUserCertificateData($_SESSION['user_id']);
            $data = array(
                'nombre' =>$nombre[0],
                'site' => $_SESSION['course']
            );     
            //var_dump($nombre[0]['fullname']);       
            return view('certification/index', $data);
        }        
    }
}