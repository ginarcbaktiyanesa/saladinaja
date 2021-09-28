<?php 

class Model_modal extends CI_Model
{

  public function modal(){
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('menu_bahan','menu_bahan.KodeMenu=menu.KodeMenu');
        $this->db->join('bahan','bahan.KodeBahan=menu_bahan.KodeBahan');
        $query = $this->db->get();
        return $query;
    }

    public function modal_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    // public function detail_menu($KodeMenu = null){

    //     $query = $this->db->get_where('menu', array('KodeMenu' => $KodeMenu))->row_array();
    //     $queryx = "SELECT * FROM menu_bahan WHERE KodeMenu = $KodeMenu";
    //     $queryx = $this->db->query($queryx)->result_array();


    //     return $queryx+$query;

    // }

    public function detail_menu($KodeMenu = NULL){
        $query = $this->db->get_where('menu', array('KodeMenu' => $KodeMenu))->row_array();
        $queryx = "SELECT * FROM menu_bahan WHERE KodeMenu = '$KodeMenu'";
        $queryx = $this->db->query($queryx)->result_array();


        // $queryy = "SELECT * FROM menu WHERE KodeMenu = $KodeMenu";

        return $queryx+$query;
    }

}

?>