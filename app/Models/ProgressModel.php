<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgressModel extends Model
{
    function worldProgress($user_id, $prefix){
        $sqlSentence = "call sp_avance_mundos(?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $prefix));

        if($result){
            return $result;
        }        
    }

    function lessonProgress($user_id, $prefix, $course_id){
        $sqlSentence = "call sp_avance_lecciones(?,?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $prefix, $course_id));

        if($result){
            return $result;
        }
    }

    function activityProgress($user_id, $lesson_id, $prefix){
        $sqlSentence = "call sp_avance_actividades(?,?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $lesson_id, $prefix));

        if($result){
            return $result;
        }
    }
}