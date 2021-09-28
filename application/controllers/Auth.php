<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', "Password", "trim|required");

        if ($this->form_validation->run() == FALSE) {
            // $data['title'] = "Login Page";
            // $this->load->view('layout_admin/header_admin', $data);
            $this->load->view('login/login');
            // $this->load->view('layout_admin/footer_admin');
        } else {
            $this->_login();
        }
    }

    // BELUM ADA VALIDASI

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $jenis_table = $this->input->post('jenis_table');
        if (!isset($jenis_table)) {
            redirect('auth');
        }

        //cek di database
        $user = $this->db->get_where($jenis_table, ['Username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['Password'])) {
                $user_data = [
                    'username'  => $user['Username'],
                    'id_pegawai'      => $user['IdPegawai'],
                    'is_logged' => TRUE,
                    'name'      => $user['NamaPegawai'],
                ];
                $this->session->set_userdata($user_data);
                // $this->session->mark_as_temp($user_data, 28800);
                if ($jenis_table == 'pegawai') {
                    redirect('pemesanan');
                } else if ($jenis_table == 'kurir') {
                    redirect('pengiriman');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username atau Password anda salah </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username atau Password anda salah </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('is_logged');

        redirect('auth');
    }
}
