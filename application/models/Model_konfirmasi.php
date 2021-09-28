<?php 

class Model_konfirmasi extends CI_Model{
    public function tampildatakonfirmasi() {
        return $this->db->get('pemesanan');
    }
    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}