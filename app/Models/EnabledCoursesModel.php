<?php

namespace App\Models;

use CodeIgniter\Model;

class EnabledCoursesModel extends Model
{
    protected $table      = 'enabledcourses';
    protected $primaryKey = 'id';    
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'category',         
  ];
    
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}