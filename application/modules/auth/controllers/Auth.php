<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here
        $this->load->model('Authmodel');
        $this->user = $this->session->userdata("nikahapps");
    }

    public function index() {
        
        $data = array();
        $data['title'] = 'Wedding Apps | Login Admin ';
        $this->load->view('login', $data);
    }

    public function login() {
        $param = $this->input->post();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('auth');
        } else {
            $user = $this->Authmodel->get_user($param);
            if (!empty($user)) {
                $this->user = $this->session->set_userdata('nikahapps', $user);
//                var_dump($as['role_admin']);
//                exit();
                if ($this->user['role_admin'] == 0) {
                    redirect('dashboard/list_undangan_personal');
                } else if ($this->user['role_admin'] == 1) {
                    redirect('dashboard/bukutamu');
                } else if ($this->user['role_admin'] == 2) {
                    redirect('dashboard/souvenir');
                }
            } else {
                $this->session->set_flashdata('flash_message', login_err('Maaf.., User tidak ditemukan  !!'));
                redirect('auth');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->unset_userdata('nikahapps');
        //print_r($this->session->userdata());exit;
        redirect('auth');
    }

}
