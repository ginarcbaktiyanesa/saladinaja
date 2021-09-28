<?php 
class Pembayaran extends CI_Controller{
    function __construct(){
        parent::__construct();      
        $this->load->model('Model_pembayaran');
        }
    public function index()
    {
        if(isset($_SESSION['is_logged'])) {
            $data['pembayaran'] = $this->Model_pembayaran->tampildatapembayaran()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/pembayaran',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth');
            // var_dump($_SESSION);
            // echo "gagal";
        }
    }
    public function search(){
        $keyword = $this->input->post('keyword');
        $data['pembayaran']=$this->Model_pembayaran->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pembayaran',$data);
        $this->load->view('templates/footer');
    }
}
    