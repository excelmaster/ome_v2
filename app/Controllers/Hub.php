<?php 
namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\UserModel;
session_start();
helper('cookie');

class Hub extends BaseController {
    public function index (){
        echo 'desde hub';
        print_r(get_cookie('numberOfSessions'));
        return view('hub');
    }        
}