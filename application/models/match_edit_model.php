<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_edit_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function getMatches(){
        $query = $this->db->get('matches');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return false;
        }
    }
    function getMatch($id){
        $this->db->where('id',$id);
        $query = $this->db->get('matches');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return false;
        }
    }
    function updateMatch($data, $id){


        $newData = array(
            'place'=>$data['place'],
            'time'=>$data['time'],
            'done'=>$data['done']
        );

        $this->db->where('id',$id);
        $query = $this->db->update('matches', $newData);


    }
}

?>