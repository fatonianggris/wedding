<?php

class Errorpage extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->output->set_status_header('404');
        $data['title'] = 'PAPB | Error 404 ';
        $this->load->view('error_404', $data); //loading in my template 
    }

}

?>