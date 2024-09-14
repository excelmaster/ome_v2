<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table      = 'ome_courses';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['category', 'fullname','idnumber','label','module','isExam'];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function readCourses(){
        return $this->findAll();
    }

    public function courseIsExam($courseID) : string {
        $result = $this->select('isExam')->where('id',$courseID)->first();
        return (int) $result['isExam'];
    }

}