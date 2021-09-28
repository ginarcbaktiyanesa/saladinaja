<?php 

class Pegawai extends CI_Controller{
    public function index()
    {
        if (isset($_SESSION['is_logged'])) {
            $data['pegawai'] = $this->Model_pegawai->tampildatapegawai()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/pegawai',$data);
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
        $this->load->view('admin/tambahpegawai');
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $IdPegawai = $this->input->post('IdPegawai');
        $NamaPegawai = $this->input->post('NamaPegawai');
        $Username = $this->input->post('Username');
        $Password = $this->input->post('Password');

        $sql1 = $this->db->query("Select * FROM pegawai WHERE IdPegawai = '$IdPegawai'");
        $cek_id = $sql1->num_rows();
        if($cek_id != 0 ){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Id Sudah Terdaftar!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('pegawai/index'); 
        }else{
            $sql = $this->db->query("Select Username FROM pegawai WHERE Username = '$Username'");
            $cek_username = $sql->num_rows();

            if($cek_username != 0 ){
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Tambah Ulang Data, Username Sudah Digunakan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('pegawai/index'); 
            }else{
            $data = array(
                'IdPegawai' => $IdPegawai,
                'NamaPegawai' => $NamaPegawai,
                'Username' => $Username,
                'Password' => $Password = password_hash($Password, PASSWORD_DEFAULT)
            );

            $this->Model_pegawai->tambah_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('pegawai/index');
            }
        }
    }

    public function hapus ($IdPegawai)
    {
        if($this->session->userdata('id_pegawai') == $IdPegawai){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Tidak Dapat Dihapus Karena User Sedang Aktif!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('pegawai/index')); 
        } else {
            $where = array ('IdPegawai' => $IdPegawai);
            $this->Model_pegawai->hapus_data($where, 'pegawai');
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Di Hapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect ('pegawai/index');
        }
    }

    public function edit($IdPegawai){
        if($this->session->userdata('id_pegawai')!==$IdPegawai){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda Hanya Dapat Mengubah Data Diri Sendiri!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
            redirect(base_url('pegawai/index')); 
        } else {
        $where = array('IdPegawai' => $IdPegawai);
        $data['pegawai'] = $this->Model_pegawai->edit_data($where, 'pegawai')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/editpegawai',$data);
        $this->load->view('templates/footer');
        }
    }

    public function update(){
        $IdPegawai = $this->input->post('IdPegawai');
        $NamaPegawai = $this->input->post('NamaPegawai');
        $Username = $this->input->post('Username');
        $Password = $this->input->post('Password');

        $data = array(
            'IdPegawai' => $IdPegawai,
            'NamaPegawai' => $NamaPegawai,
            'Username' => $Username,
            'Password' => $Password = password_hash($Password, PASSWORD_DEFAULT)
        );

        $where = array (
            'IdPegawai' => $IdPegawai
        );

        $this->Model_pegawai->update_data($where,$data,'pegawai');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Ubah!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('pegawai/index');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['pegawai']=$this->Model_pegawai->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pegawai',$data);
        $this->load->view('templates/footer');
    }
}