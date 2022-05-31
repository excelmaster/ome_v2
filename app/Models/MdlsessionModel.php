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

    function getCountActiveSession($userid , $ip){
        $userid = $_SESSION['user_id'];
        $ip = $_SESSION['ipaddress'];
        $db = \config\Database::connect();
        $builder = $db->table($this->table);
        $criterios = [ 'userid' => $userid, 'firstip' => $ip];
        $builder->where($criterios);
        $numeroSesiones = $builder->countAllResults();        
        return $numeroSesiones;
    }

    function deleteActiveSessions($userId,$ip){
        $numeroSesiones = $this->getCountActiveSession($userId, $ip);
        if($numeroSesiones > 0){
            $db = \config\Database::connect();
            $builder = $db->table($this->table);
            $criterios = [ 'userid' => $userId, 'firstip' => $ip];
            $builder->where($criterios);
            $builder->Delete();
        }
        
        return 0;
    }
}