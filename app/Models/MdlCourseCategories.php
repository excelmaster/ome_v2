<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlCourseCategories extends Model
{
    protected $table      = 'mdl_course_categories';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','name','visible'];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function readActivitiesxLesson($lessonId){
        return $this->where('lessonId',$lessonId)->orderBy('activityNumber','asc')->findAll();
    }

}