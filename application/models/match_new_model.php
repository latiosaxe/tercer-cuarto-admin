<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_new_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function submitMatch($data){


        $data['submit'] =  date('Y-m-d H:i:s');

        $this->db->insert('matches', array(
            'submit'=>$data['submit'],
            'team_1'=>$data['team_1'],
            'team_2'=>$data['team_2'],
            'place'=>$data['place'],
            'time'=>$data['time'],
        ));
//        if(!$this->input->post('done')){
//
//        }else{
//            $this->db->insert('matches', array(
//                'place'=>$data['place'],
//                'time'=>$data['time'],
//                'done'=>$data['done']
//            ));
//        }
    }

//    function getTeams(){
//        $query = $this->db->get('equipos');
//        if($query->num_rows() > 0){
//            return $query;
//        }else{
//            return false;
//        }
//    }
}

?>