<?php

class Gizicreamysalad extends CI_Controller{

    public function index(){
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/gizicreamysalad');
        $this->load->view('templates/footer1');

    }
}