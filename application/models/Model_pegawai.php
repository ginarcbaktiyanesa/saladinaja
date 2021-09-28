<?php 

class Model_pegawai extends CI_Model{
    public function tampildatapegawai() {
        return $this->db->get('pegawai');
    }

    public function tambah_data($data){
        $this->db->insert('pegawai', $data);
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
        $this->db->from('pegawai');
        $this->db->like('IdPegawai',$keyword);
        $this->db->or_like('NamaPegawai',$keyword);
        $this->db->or_like('Username',$keyword);
        return $this->db->get()->result();
    }
}