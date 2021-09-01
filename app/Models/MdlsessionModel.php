<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlsessionModel extends Model
{
    protected $table      = 'mdl_user_sessions';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'suspended',
        'username',
        'password',
        'firstname',
        'lastname',
        'email',
        'sid',
        'firstip',
        'idSession',
    ];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}