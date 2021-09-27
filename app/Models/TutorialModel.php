<?php

namespace App\Models;

use CodeIgniter\Model;

class TutorialModel extends Model
{
    protected $table      = 'ome_tutorials';
    protected $primaryKey = 'id';    
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'label', 
        'tipo',
        'url',
        'deleted_at',
        'position'
    ];
    
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}