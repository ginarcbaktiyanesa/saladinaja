<?php 

class Kurir extends CI_Controller{
    public function index()
    {
        if (isset($_SESSION['is_logged'])) {
            $data['kurir'] = $this->Model_kurir->tampildatakurir()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/kurir',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth');
        }
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/tambahkurir');
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $IdKurir = $this->input->post('IdKurir');
        $NamaKurir = $this->input->post('NamaKurir');
        $Harga = $this->input->post('Harga');
        $Username = $this->input->post('Username');
        $Password = $this->input->post('Password');

        $sql1 = $this->db->query("Select * FROM kurir WHERE IdKurir = '$IdKurir'");
        $cek_id = $sql1->num_rows();
        if($cek_id != 0 ){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Id Sudah Terdaftar!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kurir/index'); 
        }else{
        $sql = $this->db->query("Select * FROM kurir WHERE Username = '$Username'");
        $cek_username = $sql->num_rows();

            if($cek_username != 0 ){
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Tambah Ulang Data, Username Sudah Digunakan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('kurir/index'); 
            }else{

            $data = array(
                'IdKurir' => $IdKurir,
                'NamaKurir' => $NamaKurir,
                'Harga' => $Harga,
                'Username' => $Username,
                'Password' => $Password = password_hash($Password, PASSWORD_DEFAULT)
            );

            $this->Model_kurir->tambah_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kurir/index');
            }
        }
    }

    public function hapus ($IdKurir)
    {
        $where = array ('IdKurir' => $IdKurir);
        $this->Model_kurir->hapus_data($where, 'kurir');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Hapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect ('kurir/index');
    }

    public function edit($IdKurir){
        $where = array('IdKurir' => $IdKurir);
        $data['kurir'] = $this->Model_kurir->edit_data($where, 'kurir')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/editkurir',$data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $IdKurir = $this->input->post('IdKurir');
        $NamaKurir = $this->input->post('NamaKurir');
        $Harga = $this->input->post('Harga');
        $Username = $this->input->post('Username');
        $Password = $this->input->post('Password');

        $data = array(
            'IdKurir' => $IdKurir,
            'NamaKurir' => $NamaKurir,
            'Harga' => $Harga,
            'Username' => $Username,
            'Password' => $Password = password_hash($Password, PASSWORD_DEFAULT)
        );

        $where = array (
            'IdKurir' => $IdKurir
        );

        $this->Model_kurir->update_data($where,$data,'kurir');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Di Ubah!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('kurir/index');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['kurir']=$this->Model_kurir->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kurir',$data);
        $this->load->view('templates/footer');
    }
}