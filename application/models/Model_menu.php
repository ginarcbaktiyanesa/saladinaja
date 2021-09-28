<?php 

class Model_menu extends CI_Model{
    public function tampildatamenu() {
        return $this->db->get('menu');
    }

    public function tambah_data($data){
        $this->db->insert('menu', $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    // public function hapus_data($KodeMenu)
    // {
    //     $query = $this->db->get_where('menu', array('KodeMenu' => $KodeMenu))->row_array();
    //     $queryx = ("DELETE menu, bahan, menu_bahan 
    //     FROM menu, bahan, menu_bahan 
    //     WHERE menu.KodeMenu=menu_bahan.KodeMenu
    //     AND bahan.KodeBahan=menu_bahan.KodeBahan
    //     AND menu.KodeMenu = $KodeMenu");
    //     // $queryx = $this->db->query($queryx);
    //     return $query+$queryx;
    // }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function tambah_bahan($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->like('KodeMenu',$keyword);
        $this->db->or_like('NamaMenu',$keyword);
        $this->db->or_like('HargaMenu',$keyword);
        return $this->db->get()->result();
    }

    // public function find($id){
    //     $result = $this->db->where('KodeMenu',$id)
    //                         ->limit(1)
    //                         ->get(menu);
    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     }else{
    //         return array();
    //     }
    // }
}