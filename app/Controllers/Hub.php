<?php 
namespace App\Controllers;
use App\Models\UserModel;

class Hub extends BaseController {
    public function index (){
        return view('hub/index');
    }        
}