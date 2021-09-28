<?php
class Crud extends CI_Controller{
 
 function __construct(){
     parent::__construct();		
     $this->load->model('Model_rekening');
             $this->load->helper('url');
 }

 function index(){
     $data['rekening'] = $this->Model_rekening->tampilrekening()->result();
     $this->load->view('pemesan/rekening',$data);
 }
}