<?php
class Modal extends CI_Controller{
    // public function detail($KodeMenu){
    //     $this->load->model('model_modal');
    //     $detail = $this->model_modal->detail_menu($KodeMenu);
    //     $data['detail'] = $detail;
    //     // $this->load->view('templates/header');
    //     // $this->load->view('templates/sidebar');
    //     // $this->load->view('pemesan/pesan',$data);
    //     // $this->load->view('templates/footer');
    //     // var_dump($data);

    //     // echo count($data['detail']);
    // }
    public function detail($KodeMenu){
        $this->load->model('Model_modal');
        $detail = $this->model_modal->detail_menu($KodeMenu);
        $data['detail'] = $detail;
        $this->load->view('templates/header1');
        $this->load->view('templates/navbar');
        $this->load->view('pemesan/pesan',$data);
        $this->load->view('templates/footer1');
        // var_dump($data);
        // echo count($data['detail']);
    }

}

?>