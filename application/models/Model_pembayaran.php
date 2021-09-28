<?php

class Model_pembayaran extends CI_Model{
    public function tampildatapembayaran(){
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('rekening','rekening.NoRekening=pemesanan.NoRekening');
        $query = $this->db->get();
        return $query;
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('rekening','rekening.NoRekening=pemesanan.NoRekening');
        $this->db->like('NoPemesanan',$keyword);
        $this->db->or_like('pemesanan.NoRekening',$keyword);
        $this->db->or_like('JenisPembayaran',$keyword);
        $this->db->or_like('TotalBayar',$keyword);
        $query = $this->db->get();
        return $query->result();
    }
}
