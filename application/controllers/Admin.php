<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $ok = false;
        if( $this->session->userdata('is_admin') ){
            $ok = true;
        }else if( isset( $_GET['pass'] ) ){
            $ok = true;
            $this->session->set_userdata('is_admin', true);
            redirect( base_url('admin'), 'refresh');
        }
        if( !$ok ){
            redirect( base_url(), 'refresh');
            exit;
        }
        $this->load->model('Match_model');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect( base_url(), 'refresh');
    }

    // inicio
    public function index(){
        $html = $this->load->view('admin/home', null, true);
        $data = array(
            'html' => $html,
        );
        $this->load->view('common/admin_template', $data );
    }

    // Crear o editar partido
    public function match( $id = 0 ){

        $default_data = array(
            'id' => 0,
            'team_1' => 0,
            'team_2' => 0,
            'time' => '',
            'place' => 0,
        );
        if( $id > 0 ){
            // Obtenemos los datos del modelo
            $match_data = $this->Match_model->getMatch( $id );
            if( $match_data ){
                $default_data = (array)$match_data;
            }
        }
        if( $_POST ){
            $new_data = array(
                'id'        => (int)$this->input->post('id'),
                'team_1'    => (int)$this->input->post('team_1'),
                'team_2'    => (int)$this->input->post('team_2'),
                'time'      => $this->input->post('time'),
                'place'     => $this->input->post('place'),
                'done'      => (int)$this->input->post('done'),
            );
            $new_id = $this->Match_model->updateMatch( $new_data, $id );

            $match_data = $this->Match_model->getMatch( $new_id );
            if( $match_data ){
                $default_data = (array)$match_data;
            }
            $default_data['form_ok'] = true;
        }

        $html = $this->load->view('admin/match_edit', $default_data, true);
        $data = array(
            'html' => $html,
        );
        $this->load->view('common/admin_template', $data );
    }

    // Listado de partidos
    public function matches(){


    }


}
