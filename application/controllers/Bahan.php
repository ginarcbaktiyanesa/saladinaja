<?php 

class Bahan extends CI_Controller{
    public function index()
    {
        if (isset($_SESSION['is_logged'])) {
            $data['bahan'] = $this->Model_bahan->tampildatabahan()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/bahan',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth');
        }
    }
    //tambah bahan di detail menu
    public function add($KodeMenu)
    {
        $where = array('KodeMenu' => $KodeMenu);
        $data['menu'] = $this->Model_menu->tambah_bahan($where, 'menu')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/tambahbahandetail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $KodeMenu = $this->input->post('KodeMenu');
        $KodeBahan = $this->input->post('KodeBahan');

        $sql = $this->db->query("Select * FROM menu_bahan WHERE KodeMenu = '$KodeMenu' AND KodeBahan='$KodeBahan'");
        $cek_kode = $sql->num_rows();
        if($cek_kode != 0 ){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Bahan Sudah Terdaftar!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('menu/detail/'.$KodeMenu); 
        }else{
        $data = array(
            'KodeMenu' => $KodeMenu,
            'KodeBahan' => $KodeBahan
        );

        $this->Model_bahan->tambah_menubahan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('menu/detail/'.$KodeMenu);
        }
    }
    //tambah bahan di sidebar
    public function add_bahan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/tambahbahan');
        $this->load->view('templates/footer');
    }

    public function tambah_bahan(){
        $KodeBahan = $this->input->post('KodeBahan');
        $NamaBahan = $this->input->post('NamaBahan');

        $sql = $this->db->query("Select * FROM bahan WHERE KodeBahan = '$KodeBahan'");
        $cek_kode = $sql->num_rows();
        if($cek_kode != 0 ){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Kode Bahan Sudah Terdaftar!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('bahan/index'); 
        }else{
        $data = array(
            'KodeBahan' => $KodeBahan,
            'NamaBahan' => $NamaBahan
        );

        $this->Model_bahan->tambah_data($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('bahan/index');
        }
    }
    
    //untuk hapus bahan di detail
    public function hapus ($KodeBahan)
    {
        $where = array (
            'KodeBahan' => $KodeBahan
        );
        $this->Model_bahan->hapus_data($where, 'menu_bahan');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Hapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('menu/index');
        // redirect('menu/detail/'.$KodeMenu);
    }

    //sidebar data bahan
    public function hapus_bahan ($KodeBahan)
    {
        $where = array ('KodeBahan' => $KodeBahan);
        $this->Model_bahan->hapus_data($where, 'bahan');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Hapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect ('bahan/index');
    }

    public function edit($KodeBahan){
        $where = array('KodeBahan' => $KodeBahan);
        $data['bahan'] = $this->Model_bahan->edit_data($where, 'bahan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/editbahan',$data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $KodeBahan = $this->input->post('KodeBahan');
        $NamaBahan = $this->input->post('NamaBahan');

        $data = array(
            'KodeBahan' => $KodeBahan,
            'NamaBahan' => $NamaBahan
        );

        $where = array (
            'KodeBahan' => $KodeBahan
        );

        $this->Model_bahan->update_data($where,$data,'bahan');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Di Ubah!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('menu/index');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['bahan']=$this->Model_bahan->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/bahan',$data);
        $this->load->view('templates/footer');
    }
}