<?php
class model_keranjang extends CI_Model{
 
    function get_all_produk(){
        $hasil=$this->db->get('menu');
        return $hasil->result();
    }

    
     
}