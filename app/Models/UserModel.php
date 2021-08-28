<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'mdl_user';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['suspended', 'username','password','firstname','lastname', 'email'];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}