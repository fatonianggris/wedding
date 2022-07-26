<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here
        $this->load->model('Dashboardmodel');
        if ($this->session->userdata('nikahapps') == FALSE) {
            redirect('auth');
        }
        $this->user = $this->session->userdata("nikahapps");
    }

    public function bukutamu() {
        if ($this->session->userdata('nikahapps') == TRUE) {
            if ($this->user['role_admin'] == 2) {
                redirect('dashboard/souvenir');
            }
        }
        $data['wed'] = 'Wedding';
        $this->load->view('home_bukutamu', $data);
    }

    public function souvenir() {
        if ($this->session->userdata('nikahapps') == TRUE) {
            if ($this->user['role_admin'] == 1) {
                redirect('dashboard/bukutamu');
            }
        }
        $data['wed'] = 'Wedding';
        $data['hadir'] = $this->Dashboardmodel->all_hadir_grup();
        $this->load->view('home_souvenir', $data);
    }

    public function get_data() {

        $check = $this->Dashboardmodel->get_data_check();
        echo '1,' . strtoupper($check[0]->cek_in . ',' . $check[0]->cek_out);
    }

    public function list_undangan_personal() {
        if ($this->session->userdata('nikahapps') == TRUE) {
            if ($this->user['role_admin'] == 1) {
                redirect('dashboard/bukutamu');
            } else if ($this->user['role_admin'] == 2) {
                redirect('dashboard/souvenir');
            }
        }
        $data['undangan'] = $this->Dashboardmodel->get_count_pribadi();
        $data['tamu'] = $this->Dashboardmodel->list_tamu_personal();
        $this->template->load('template_admin/template_admin', 'list_undangan_personal', $data);
    }

    public function list_undangan_grup() {
        if ($this->session->userdata('nikahapps') == TRUE) {
            if ($this->user['role_admin'] == 1) {
                redirect('dashboard/bukutamu');
            } else if ($this->user['role_admin'] == 2) {
                redirect('dashboard/souvenir');
            }
        }
        $data['undangan'] = $this->Dashboardmodel->get_count_group();
        $data['tamu'] = $this->Dashboardmodel->list_tamu_grup();
        $data['barcode'] = $this->Dashboardmodel->barcode();
        $data['hadir'] = $this->Dashboardmodel->all_hadir_grup();
        $data['kuota'] = $this->Dashboardmodel->cek_hadir_grup();
        $this->template->load('template_admin/template_admin', 'list_undangan_grup', $data);
    }

    public function cek_barcode() {

        $id_barcode = $this->input->post('barcode');
        $cek = $this->Dashboardmodel->get_by_id($id_barcode);
        if (empty($id_barcode) or $cek == FALSE) {
            //add new data
            echo '0';
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 0 && $cek[0]->status_undangan == 0) {
            //edit data with id
            echo '1,' . strtoupper($cek[0]->nama . ',' . $cek[0]->date . ',' . $cek[0]->id);
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 1 && $cek[0]->status_undangan == 0) {
            //edit data with id
            echo '2,' . strtoupper($cek[0]->nama) . ',' . $cek[0]->date;
        } else if (!empty($id_barcode) && ($cek[0]->kuota_undangan == 0) && $cek[0]->status_undangan == 1) {
            //edit data with id
            echo '3,' . strtoupper($cek[0]->nama);
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran >= 0 && $cek[0]->status_undangan == 1) {
            //edit data with id
            echo '4,' . strtoupper($cek[0]->nama) . ',' . ($cek[0]->kuota_undangan);
        }
    }

    public function cek_barcode_souvenir() {

        $id_barcode = $this->input->post('barcode');
        $cek = $this->Dashboardmodel->get_by_id($id_barcode);
        if (empty($id_barcode) or $cek == FALSE) {
            //add new data
            echo '0';
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 1 && $cek[0]->status_undangan == 0 && $cek[0]->kuota_souvenir == 1) {
            //edit data with id
            echo '1,' . strtoupper($cek[0]->nama . ',' . $cek[0]->date . ',' . $cek[0]->id);
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 1 && $cek[0]->status_undangan == 0 && $cek[0]->kuota_souvenir == 0) {
            //edit data with id
            echo '2,' . strtoupper($cek[0]->nama) . ',' . $cek[0]->date;
        } else if (!empty($id_barcode) && ($cek[0]->kuota_souvenir == 0) && $cek[0]->status_undangan == 1) {
            //edit data with id
            echo '3,' . strtoupper($cek[0]->nama);
        } else if (!empty($id_barcode) && $cek[0]->kuota_souvenir > 1 && $cek[0]->status_undangan == 1) {
            //edit data with id
            echo '4,' . strtoupper($cek[0]->nama) . ',' . ($cek[0]->kuota_souvenir);
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 1 && $cek[0]->status_undangan == 0 && $cek[0]->kuota_souvenir == 1) {
            //edit data with id
            echo '5,' . strtoupper($cek[0]->nama . ',' . $cek[0]->date . ',' . $cek[0]->id);
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 0 && $cek[0]->status_undangan == 0 && $cek[0]->kuota_souvenir == 1) {
            //edit data with id
            echo '6,' . strtoupper($cek[0]->nama . ',' . $cek[0]->date . ',' . $cek[0]->id);
        }
    }

    public function ubah_status() {

        $id_status = $this->input->post('status');
        $id_barcode = $this->input->post('barcode');
        $cek = $this->Dashboardmodel->get_by_id($id_barcode);

        if (empty($id_barcode) or $cek == FALSE) {
            //add new data
            echo '0';
        } else if (!empty($id_barcode) && $cek[0]->status_kehadiran == 0 && $cek[0]->status_undangan == 0) {
            //edit data with id
            echo '1';
            $this->Dashboardmodel->update_status($id_barcode, $id_status);
        }
    }

    public function ubah_status_souvenir() {

        $id_status = $this->input->post('status');
        $id_barcode = $this->input->post('barcode');
        $cek = $this->Dashboardmodel->get_by_id($id_barcode);

        if (empty($id_barcode) or $cek == FALSE) {
            //add new data
            echo '0';
        } else if (!empty($id_barcode) && $cek[0]->kuota_souvenir == 1 && $cek[0]->status_undangan == 0) {
            //edit data with id
            echo '1';
            $this->Dashboardmodel->update_status_souvenir($id_barcode, $id_status);
        }
    }

    public function tambah_hadir() {

        $nama = $this->input->post('nama');
        $asal = $this->input->post('asal');
        $id_barcode = $this->input->post('barcode');

        $cek = $this->Dashboardmodel->get_by_id($id_barcode);

        if (empty($id_barcode) or $cek == FALSE) {
            //add new data
            echo '0';
        } else if (!empty($id_barcode)) {
            //edit data with id
            echo '1';
            $this->Dashboardmodel->update_status_undangan_group($id_barcode);
            $this->Dashboardmodel->tambah_tamu($id_barcode, $nama, $asal);
        }
    }

    public function ubah_status_souvenir_group() {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $id_barcode = $this->input->post('barcode');
        $cek = $this->Dashboardmodel->get_by_id($id_barcode);

        if (empty($id_barcode) or $cek == FALSE) {
            //add new data
            echo '0';
        } else if (!empty($id_barcode)) {
            //edit data with id
            echo '1';
            $this->Dashboardmodel->update_status_souvenir_group($id_barcode, $status);
            $this->Dashboardmodel->update_status_souvenir_group_id($id);
        }
    }

    public function edit_undangan_group() {
        $this->load->library('form_validation');
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('barcode', 'Barcode Undangan', 'required');
        $this->form_validation->set_rules('nama_grup', 'Nama Group Undangan', 'required');
        $this->form_validation->set_rules('status_undangan', 'Status Undangan', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota Undangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('dashboard/list_undangan_grup'); //folder, controller, method
        } else {

            $input = $this->Dashboardmodel->update_undangan_group($data);
            if ($input == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data telah tersimpan..'));
                redirect('dashboard/list_undangan_grup');
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('dashboard/list_undangan_grup');
            }
        }
    }

}
