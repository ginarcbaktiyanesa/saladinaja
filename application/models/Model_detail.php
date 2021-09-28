<?php

class Model_detail extends CI_Model
{

    public function detail_menu($KodeMenu = NULL)
    {
        $query = $this->db->get_where('menu', array('KodeMenu' => $KodeMenu))->row_array();
        $queryx = "SELECT * FROM menu_bahan WHERE KodeMenu = '$KodeMenu'";
        $queryx = $this->db->query($queryx)->result_array();


        return $queryx + $query;
    }

    public function detail_pesan($NoPemesanan = NULL)
    {
        $query = $this->db->get_where('pemesanan', array('NoPemesanan' => $NoPemesanan))->row_array();
        $queryx = "SELECT * FROM pemesanan_menu WHERE NoPemesanan = '$NoPemesanan'";
        $queryx = $this->db->query($queryx)->result_array();


        return $queryx + $query;
    }
}
