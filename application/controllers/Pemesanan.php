<?php 

class Pemesanan extends CI_Controller{
    public function index()
    {
        if (isset($_SESSION['is_logged'])) {
            $data['pemesanan'] = $this->Model_pemesanan->tampildatapemesanan()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/pemesanan',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth');
            // var_dump($_SESSION);
            // echo "gagal";
        }
    }
 
    public function edit($NoPemesanan){
        $where = array('NoPemesanan' => $NoPemesanan);
        $data['pemesanan'] = $this->Model_pemesanan->edit_data($where, 'pemesanan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/editpemesanan',$data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $NoPemesanan = $this->input->post('NoPemesanan');
        $NamaPemesan = $this->input->post('NamaPemesan');
        $Alamat = $this->input->post('Alamat');
        $Nohp = $this->input->post('Nohp');
        $TotalBayar = $this->input->post('TotalBayar');
        $StatusPesanan = $this->input->post('StatusPesanan');
        $IdPegawai = $this->input->post('IdPegawai');
        $IdKurir = $this->input->post('IdKurir');

        $data = array(
            'NoPemesanan' => $NoPemesanan,
            'NamaPemesan' => $NamaPemesan,
            'Alamat' => $Alamat,
            'Nohp' => $Nohp,
            'TotalBayar' => $TotalBayar,
            'StatusPesanan' => $StatusPesanan,
            'IdPegawai' => $IdPegawai,
            'IdKurir' => $IdKurir
        );

        $where = array (
            'NoPemesanan' => $NoPemesanan
        );
        $this->Model_pemesanan->update_data($where,$data,'pemesanan');
        redirect('pemesanan/index');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['pemesanan']=$this->Model_pemesanan->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pemesanan',$data);
        $this->load->view('templates/footer');
    }

    public function detail($NoPemesanan){
        $this->load->model('model_detail');
        $detail = $this->model_detail->detail_pesan($NoPemesanan);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/detailpesan',$data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // echo count($data['detail']);
    } 
}