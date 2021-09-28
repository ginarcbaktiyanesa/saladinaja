<?php

class Dashboard extends CI_Controller{

    public function index(){
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer1');

    }
}