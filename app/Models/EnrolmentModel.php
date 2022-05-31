<?php

namespace App\Models;

use CodeIgniter\Model;

class EnrolmentModel extends Model
{
    protected $table      = 'ome_enrolment';
    protected $primaryKey = 'userid';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [        
        'idnumber'
    ];
    
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    function isEnroled($course, $userid ){        
        $db = \config\Database::connect();
        $builder = $db->table($this->table);
        $criterios = [ 'idnumber' => $course, 'userid' => $userid];
        $builder->where($criterios);
        $numeroSesiones = $builder->countAllResults();        
        if($numeroSesiones > 0){
            return true;
        } else { 
            return false;
        }
        
    }
   
}