<?php

namespace App\Models;

use CodeIgniter\Model;

class VerbModel extends Model
{
    protected $table      = 'ome_verbs';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['mundo', 'tipo','past','present','participle','significado'];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}