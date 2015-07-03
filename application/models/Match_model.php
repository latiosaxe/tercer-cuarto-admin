<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_model extends CI_Model {
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
    function getMatch( $id ){
        $this->db->where('id',$id);
        $query = $this->db->get('matches');
        if( $query->num_rows() > 0 ){
            return $query->row();
        }else{
            return null;
        }
    }
    function updateMatch( $data, $id = 0 ){
        $newData = array(
            'team_1'    => $data['team_1'],
            'team_2'    => $data['team_2'],
            'place'     => $data['place'],
            'time'      => $data['time'],
            'done'      => $data['done']
        );
        if( $this->getMatch( $id ) ){
            $where = array( 'id' => $id );
            $this->db->update('matches', $newData, $where, 1);
            return $id;
        }else{
            $newData['submit'] = date('Y-m-d H:i:s');
            $this->db->insert('matches', $newData);
            return $this->db->insert_id();
        }
    }
}

?>