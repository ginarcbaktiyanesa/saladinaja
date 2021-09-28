<?php 

class Pengiriman extends CI_Controller{
    public function index()
    {
        if (isset($_SESSION['is_logged'])) {
            $data['pemesanan'] = $this->Model_konfirmasi->tampildatakonfirmasi()->result();
            $this->load->view('templates/headerkurir');
            $this->load->view('templates/sidebarkurir');
            $this->load->view('kurir/konfirmasipengiriman',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth');
        }
    }

    public function edit($NoPemesanan){
        $where = array('NoPemesanan' => $NoPemesanan);
        $data['pemesanan'] = $this->Model_konfirmasi->edit_data($where, 'pemesanan')->result();
        $this->load->view('templates/headerkurir');
        $this->load->view('templates/sidebarkurir');
        $this->load->view('kurir/buktipengiriman',$data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $NoPemesanan = $this->input->post('NoPemesanan');
        $NamaPemesan = $this->input->post('NamaPemesan');
        $Alamat = $this->input->post('Alamat');
        $Nohp = $this->input->post('Nohp');
        $TotalBayar = $this->input->post('TotalBayar');
        $StatusPesanan = $this->input->post('StatusPesanan');
        $Foto = $_FILES['Foto'];
        if ($Foto=''){}else{
            $config['upload_path'] = './assets/Foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->upload->initialize($config);
            if(!$this->upload->do_upload('Foto')){
                echo "Upload Foto Gagal"; die();
            }else{
                $Foto=$this->upload->data('file_name');
            }
        }

        $data = array(
            'NoPemesanan' => $NoPemesanan,
            'NamaPemesan' => $NamaPemesan,
            'Alamat' => $Alamat,
            'Nohp' => $Nohp,
            'StatusPesanan' => 'Diterima',
            'Foto' => $Foto
        );

        $where = array (
            'NoPemesanan' => $NoPemesanan
        );

        $this->Model_konfirmasi->update_data($where,$data,'pemesanan');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Konfirmasi!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('pengiriman/index');
    }
}