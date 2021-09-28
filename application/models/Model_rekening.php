<?php 

class model_rekening extends CI_Model{
    public function tampilrekening() {
        return $this->db->get('rekening');
    }
}