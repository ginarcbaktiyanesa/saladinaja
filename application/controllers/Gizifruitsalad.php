<?php

class Gizifruitsalad extends CI_Controller{

    public function index(){
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/gizifruitsalad');
        $this->load->view('templates/footer1');

    }
}