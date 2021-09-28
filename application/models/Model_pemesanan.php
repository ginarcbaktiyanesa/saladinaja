<?php 

class Model_pemesanan extends CI_Model{
    
    public function index(){
        $this->form_validation->set_rules('Nohp', 'Nohp', 'required|numeric',['required' => 'Notelepon harus berupa angka!']);
        $this->form_validation->set_rules('NoRekening', 'NoRekening', 'required|numeric');
    
        if ($this->form_validation->run() == FALSE) {
            //$this->form_validation->set_message('index', "No Telepon harus diisi dengan angka!");
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
             No telepon dan No Rekening harus berupa angka!
           </div>');

        //    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
        //      No Rekening harus berupa angka!
        //    </div>');

            // $data['title'] = "Login Page";
            // $this->load->view('layout_admin/header_admin', $data);

            redirect ('pesan/pembayaran');
            // $this->load->view('layout_admin/footer_admin');
        } else {

        $NamaPemesan = $this->input->post('NamaPemesan');
        $Alamat = $this->input->post('Alamat');
        $Nohp = $this->input->post('Nohp');
        $JenisPembayaran = $this->input->post('JenisPembayaran');
        $NoRekening = $this->input->post('NoRekening');
        $AtasNama = $this->input->post('AtasNama');
        $TotalBayar = $this->cart->total();
        $KodeMenu = $this->cart->contents('id');
        $Jumlah = $this->cart->contents('qty');

        if($JenisPembayaran === 'Bayar di tempat'){

            // $rekening = array (
            //     'NoRekening' => $NoRekening,
            //     'AtasNama' => $AtasNama
            // );

            // $this->db->insert('rekening',$rekening);

            $pemesanan = array (
                'NamaPemesan' => $NamaPemesan,
                'Alamat' => $Alamat,
                'Nohp' => $Nohp,
                'JenisPembayaran' => $JenisPembayaran,
                'TotalBayar' => $TotalBayar,
                'StatusPesanan' => 'Belum Diterima',
                // 'NoRekening' => $NoRekening
                   );
    
                $this->db->insert('pemesanan',$pemesanan);
                $NoPemesanan = $this->db->insert_id();
           
//-------------------------Input data detail order-----------------------
                if ($cart = $this->cart->contents())
                {
                    foreach ($cart as $item)
                        {
                            $data_detail = array('NoPemesanan' =>$NoPemesanan,
                                            'KodeMenu' => $item['id'],
                                            'Jumlah' => $item['qty']);
                            // $proses = $this->keranjang_model->tambah_detail_order($data_detail);
                            $this->db->insert('pemesanan_menu',$data_detail);
                        }
                }
//-------------------------Hapus shopping cart--------------------------

        }elseif ($JenisPembayaran === 'Transfer') {
            $rekening = array (
                'NoRekening' => $NoRekening,
                'AtasNama' => $AtasNama
            );

            $this->db->insert('rekening',$rekening);

            $pemesanan = array (
                'NamaPemesan' => $NamaPemesan,
                'Alamat' => $Alamat,
                'Nohp' => $Nohp,
                'JenisPembayaran' => $JenisPembayaran,
                'TotalBayar' => $TotalBayar,
                'StatusPesanan' => 'Belum Diterima',
                'NoRekening' => $NoRekening
                   );
    
                $this->db->insert('pemesanan',$pemesanan);
                $NoPemesanan = $this->db->insert_id();
           
//-------------------------Input data detail order-----------------------
            if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('NoPemesanan' =>$NoPemesanan,
                                        'KodeMenu' => $item['id'],
                                        'Jumlah' => $item['qty']);
                        // $proses = $this->keranjang_model->tambah_detail_order($data_detail);
                        $this->db->insert('pemesanan_menu',$data_detail);
                    }
            }
//-------------------------Hapus shopping cart--------------------------
            
        }

            



            return TRUE;

        }

    }

    public function tampildatapemesanan() {
        $result = $this->db->get('pemesanan');
        if ($result ->num_rows() > 0 ) {
            return $this->db->get('pemesanan');
        }else {
            return false;
        }
    }

    public function tambah_data($data){
        $this->db->insert('pemesanan', $data);
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
        $this->db->from('pemesanan');
        $this->db->like('NoPemesanan',$keyword);
        $this->db->or_like('NamaPemesan',$keyword);
        $this->db->or_like('Alamat',$keyword);
        $this->db->or_like('Nohp',$keyword);
        $this->db->or_like('Totalbayar',$keyword);
        $this->db->or_like('StatusPesanan',$keyword);
        return $this->db->get()->result();
    }
}