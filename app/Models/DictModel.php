<?php

namespace App\Models;

use CodeIgniter\Model;

class DictModel extends Model
{
    protected $table      = 'ome_dictionary';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['tipo', 'letra','termino'];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}