<?php

class Gizisummersalad extends CI_Controller{

    public function index(){
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/gizisummersalad');
        $this->load->view('templates/footer1');

    }
}