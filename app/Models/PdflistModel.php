<?php

namespace App\Models;

use CodeIgniter\Model;

class PdflistModel extends Model
{
    protected $table      = 'ome_pdflist';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'mundo', 
        'course_id',
        'idLeccion',
        'activityNumber',
        'descActividad',
        'fullname',
        'site',
        'url_resources',
        'lessonId',
        'lessonNumber',
        'title',
        'objectId',
        'deleted_at'        
    ];
    
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}