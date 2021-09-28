<?php 

class Model_bahan extends CI_Model{
    public function tampildatabahan() {
        return $this->db->get('bahan');
    }

    public function tambah_data($data){
        $this->db->insert('bahan', $data);
    }

    public function tambah_menubahan($data){
        $this->db->insert('menu_bahan', $data);
    }

    // public function hapus_bahan(){
    //     $this->db->select('*');
    //     $this->db->from('menu');
    //     $this->db->join('menu_bahan','menu.KodeMenu=menu_bahan.KodeMenu');
    //     $query = $this->db->get();
    // }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    // public function edit_data($data){
        // return $this->db->get_where($table,$where);
        // $this->db->select('*');
		// $this->db->from('bahan');
		// $this->db->where('KodeBahan', $data);
		// // $this->db->order_by('id_gunung', 'DESC');
		// // $this->db->query('SELECT * FROM gunung WHERE `slug_gunung` =' .$slug_gunung.'');
		// $query = $this->db->get();
		// return $query->row();
    // }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('bahan');
        $this->db->like('KodeBahan',$keyword);
        $this->db->or_like('NamaBahan',$keyword);
        $this->db->or_like('StokBahan',$keyword);
        return $this->db->get()->result();
    }
}