<?php 

class Menu extends CI_Controller{
    public function index()
    {
        if (isset($_SESSION['is_logged'])) {
            $data['menu'] = $this->Model_menu->tampildatamenu()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/menu',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth');
            // var_dump($_SESSION);
            // echo "gagal";
        }
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/tambahmenu');
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $KodeMenu = $this->input->post('KodeMenu');
        $NamaMenu = $this->input->post('NamaMenu');
        $HargaMenu = $this->input->post('HargaMenu');
        $Stok = $this->input->post('Stok');
        $Gambar = $_FILES['Gambar'];

        $sql = $this->db->query("Select * FROM menu WHERE KodeMenu = '$KodeMenu'");
        $cek_kode = $sql->num_rows();
        if($cek_kode != 0 ){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Kode Menu Sudah Terdaftar!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('menu/index'); 
        }else{

        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->upload->initialize($config);
            if(!$this->upload->do_upload('Gambar')){
                echo "Upload Gambar Gagal"; die();
            }else{
                $Gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'KodeMenu' => $KodeMenu,
            'NamaMenu' => $NamaMenu,
            'HargaMenu' => $HargaMenu,
            'Stok' => $Stok,
            'Gambar' => $Gambar
        );

        $this->Model_menu->tambah_data($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('menu/index');
        }
    }

    public function hapus ($KodeMenu)
    {
        $where = array ('KodeMenu' => $KodeMenu);
        $this->Model_menu->hapus_data($where, 'menu');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Hapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect ('menu/index');
    }

    public function edit($KodeMenu){
        $where = array('KodeMenu' => $KodeMenu);
        $data['menu'] = $this->Model_menu->edit_data($where, 'menu')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/editmenu',$data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $KodeMenu = $this->input->post('KodeMenu');
        $NamaMenu = $this->input->post('NamaMenu');
        $HargaMenu = $this->input->post('HargaMenu');
        $Stok = $this->input->post('Stok');
        $Gambar = $_FILES['Gambar'];
        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->upload->initialize($config);
            if(!$this->upload->do_upload('Gambar')){
                echo "Upload Gambar Gagal"; die();
            }else{
                $Gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'KodeMenu' => $KodeMenu,
            'NamaMenu' => $NamaMenu,
            'HargaMenu' => $HargaMenu,
            'Stok' => $Stok,
            'Gambar' => $Gambar
        );

        $where = array (
            'KodeMenu' => $KodeMenu
        );

        $this->Model_menu->update_data($where,$data,'menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Ubah!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('menu/index');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['menu']=$this->Model_menu->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/menu',$data);
        $this->load->view('templates/footer');
    }

    public function detail($KodeMenu){
        $this->load->model('model_detail');
        $detail = $this->model_detail->detail_menu($KodeMenu);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/detailmenu',$data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // echo count($data['detail']);
    }
}
