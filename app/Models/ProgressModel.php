<?php

namespace App\Models;

use CodeIgniter\Model;
use LDAP\Result;

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

    function register_scorm_activity($user_id,$course_id){
        $sqlSentence = "INSERT INTO mdl.mdl_logstore_standard_log (eventname, component, action, target, objecttable, objectid, crud, edulevel, contextid, contextlevel, contextinstanceid, userid, courseid, timecreated, origin, ip) VALUES ('\\mod_scorm\\event\\course_module_viewed', 'mod_scorm', 'viewed', 'course_module', 'scorm',999999,'r',2,";
        $sqlSentence = $sqlSentence . "999999,70,999999,".$user_id .",".$course_id.",".time().",'ome','1.1.1.1');";       
        $result = $this->db->query($sqlSentence);
        
        if($result){
            return $result;
        }
    }

    function lessonExamProgress($user_id, $prefix, $course_id){
        $sqlSentence = "call sp_avance_exam_lessons(?,?,?)";
        $result = $this->db->query($sqlSentence, array($user_id, $prefix."%", $course_id));

        if($result){
            return $result;
        }
    }
}