<?php

class Pesan extends CI_Controller{

    public function index(){
        $data['menu'] = $this->Model_menu->tampildatamenu()->result();
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/pesan', $data);
        $this->load->view('templates/footer1');

    }

    public function tambah_ke_keranjang($id){
        $menu = $this->Model_menu->find($id);
        $data = array(
            'id'      => $menu->KodeMenu,
            'qty'     => 1,
            'price'   => $menu->HargaMenu,
            'name'    => $menu->NamaMenu
    );
    
    $this->cart->insert($data);
    redirect('pesan');
    
    }

    public function detail_keranjang(){
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/keranjang');
        $this->load->view('templates/footer1');


    }
    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('pesan/index');
       

    }

    public function pembayaran(){
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/pembayaran');
        $this->load->view('templates/footer1');

    }

    public function proses_pesanan(){
        $is_processed = $this->Model_pemesanan->index();
        if($is_processed){
            $this->cart->destroy();
            
            $this->load->view('templates/header1');
            $this->load->view('templates/navbar');
            $this->load->view('pemesan/prosespesanan');
            $this->load->view('templates/footer1');
        }else{
            echo "Maaf, Pesanan Anda Gagal";
        }
    }  

    public function tampilmodal(){    
        $where = array('KodeMenu' => $KodeMenu);
        $data['menu'] = $this->Model_modal->modal()->result(); 
        $this->load->view('pemesan/modal');


    }

    // public function tambah($id){
    //     $menu = $this-Mmodel_menu->find($id);
    //     $data = array(
    //         'id'      => $menu->KodeMenu,
    //         'qty'     => 1,
    //         'price'   => $menu->HargaMenu,
    //         'name'    => $menu->NamaMenu
    // );
       

   




}