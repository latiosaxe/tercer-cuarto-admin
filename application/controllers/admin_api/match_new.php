<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_new extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('match_new_model');
    }
    public function index(){
//        $data['teams'] = $this->match_new_model->getTeams();

        $this->load->view('common/head');
        $this->load->view('common/nav');
        $this->load->view('match_new');
        $this->load->view('common/footer');

    }

    public function submitMatch(){
        $data = array(
            'team_1' => $this->input->post('team_1'),
            'team_2' => $this->input->post('team_2'),
            'place' => $this->input->post('place'),
            'time' => $this->input->post('time'),
        );
        $this->match_new_model->submitMatch($data);

        $this->load->view('common/head');
        $this->load->view('common/nav');
        $this->load->view('succes');
        $this->load->view('common/footer');
    }

}
