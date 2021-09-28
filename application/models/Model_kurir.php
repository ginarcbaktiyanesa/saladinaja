<?php 

class Model_kurir extends CI_Model{
    public function tampildatakurir() {
        return $this->db->get('kurir');
    }

    public function tambah_data($data){
        $this->db->insert('kurir', $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('kurir');
        $this->db->like('IdKurir',$keyword);
        $this->db->or_like('Namakurir',$keyword);
        $this->db->or_like('Username',$keyword);
        return $this->db->get()->result();
    }
}