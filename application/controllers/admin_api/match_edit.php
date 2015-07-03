<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_edit extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('match_edit_model');
    }
    public function index(){
        $data['segment'] = $this->uri->segment(3);
        $this->load->view('common/head');
        $this->load->view('common/nav');

        if(!$data['segment']){
            $data['matches'] = $this->match_edit_model->getMatches();
            $this->load->view('match_edit', $data);
        }else{
            $data['matches'] = $this->match_edit_model->getMatch($data['segment']);
            $this->load->view('match_edit', $data);
        }
        $this->load->view('common/footer');
    }


    public function get(){
        $data['segment'] = $this->uri->segment(3);
        $this->load->view('common/head');
        $this->load->view('common/nav');

        if(!$data['segment']){
            $data['matches'] = $this->match_edit_model->getMatches();
            $this->load->view('match_edit', $data);
        }else{
            $data['matches'] = $this->match_edit_model->getMatch($data['segment']);
            $this->load->view('match_edit', $data);
        }
        $this->load->view('common/footer');
    }


    public function update(){
        $data = array(
            'place' => $this->input->post('place'),
            'time' => $this->input->post('time'),
            'done' => $this->input->post('done')

        );
        $this->match_edit_model->updateMatch($data, $this->uri->segment(3));
        $this->load->view('common/head');
        $this->load->view('common/nav');
        $this->load->view('succes', $data);
        $this->load->view('common/footer');
    }
}
