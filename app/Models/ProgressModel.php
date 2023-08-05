<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgressModel extends Model
{
    function worldProgress($user_id, $prefix){
        $sqlSentence = "call sp_avance_worlds(?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $prefix));

        if($result){
            return $result;
        }        
    }

    function lessonProgress($user_id, $prefix, $course_id){
        $sqlSentence = "call sp_avance_lessons(?,?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $prefix."%", $course_id));

        if($result){
            return $result;
        }
    }

    function activityProgress($user_id, $lesson_id, $prefix){
        $sqlSentence = "call sp_visita_actividades(?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $lesson_id));        
        
        if($result){
            return $result;
        }
    }
}