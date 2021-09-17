<?php

namespace App\Models;

use CodeIgniter\Model;

class MusicModel extends Model
{
    protected $table      = 'ome_music';
    protected $primaryKey = 'id';    
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'categoria', 
        'activityNumber',
        'img_path',
        'objectId',
        'tipo',
        'url_resources',
    ];
    
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}