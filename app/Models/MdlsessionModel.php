<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlsessionModel extends Model
{
    protected $table      = 'mdl_sessions';
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

    function deleteActiveSession($userid, $ip){
       
        $db = \config\Database::connect();
        $builder = $db->table($this->table);
        $criterios = [ 'userid' => $userid, 'firstip' => $ip];
        $builder->where($criterios);
        $numeroSesiones = $builder->countAllResults();
        if($numeroSesiones > 0){
            $builder->where($criterios);
            echo $builder->getCompiledDelete();
        }
        return 0;
    }
}