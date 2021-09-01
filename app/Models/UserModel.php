<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'mdl_user';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = 
    [
        'deleted',
        'suspended',
        'username',
        'password',        
        'first_name',
        'last_name',
        'email',
        'phone1',
        'phone2',
        'city',
        'country',
        'firstaccess',
        'lastaccess',
        'lastlogin',
        'currentlogin',
        'lastip'
    ];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected function passwordHash(array $data){
        if(!isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

}