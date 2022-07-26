<?php

class Dashboardmodel extends CI_Model {

    private $table_barcode = 'tabel_undangan';
    private $table_hadir = 'undangan_group';

    public function get_count_pribadi() {

        $sql = $this->db->query('SELECT (select count(id) from tabel_undangan WHERE status_kehadiran=0 AND status_undangan=0)as belum_hadir, (select count(id) from tabel_undangan WHERE status_kehadiran=1 AND status_undangan=0)as sudah_hadir, (select count(id) from tabel_undangan WHERE status_undangan=0)as total_tamu');

        return $sql->result();
    }

    public function get_count_group() {

        $sql = $this->db->query('SELECT (select SUM(status_kehadiran) from tabel_undangan WHERE status_undangan=1)as sudah_hadir, (select SUM(kuota_undangan) from tabel_undangan WHERE status_undangan=1)as belum_hadir, (select sum(status_kehadiran+kuota_undangan) from tabel_undangan WHERE status_undangan=1)as total_tamu;');

        return $sql->result();
    }

    public function list_tamu_personal() {

        $sql = $this->db->query("Select * from tabel_undangan WHERE status_undangan=0 ORDER BY date DESC");

        return $sql->result();
    }

    public function cek_hadir_grup() {

        $sql = $this->db->query("Select count(*) as jml_hadir from undangan_group");

        return $sql->result();
    }

    public function get_data_check() {

        $sql = $this->db->query("SELECT ((select count(id) from tabel_undangan WHERE status_kehadiran=1 AND status_undangan=0) + (Select count(id) from undangan_group))as cek_in, ((select count(id) from tabel_undangan WHERE kuota_souvenir=0 AND status_undangan=0) + (Select count(id) from undangan_group WHERE souvenir=0)) as cek_out");

        return $sql->result();
    }

    public function all_hadir_grup() {

        $sql = $this->db->query("Select * from undangan_group ORDER BY date DESC");

        return $sql->result();
    }

    public function list_tamu_grup() {

        $sql = $this->db->query("Select * from tabel_undangan WHERE status_undangan=1 ORDER BY date DESC");

        return $sql->result();
    }

    public function barcode() {

        $sql = $this->db->query("Select barcode from tabel_undangan WHERE status_undangan=0");

        return $sql->result();
    }

    public function get_by_id($id_barcode = '') {

        $this->db->select('nama,status_kehadiran,date,id,status_undangan,kuota_undangan,kuota_souvenir');
        $this->db->where('barcode', $id_barcode);

        $sql = $this->db->get($this->table_barcode);
        return $sql->result();
    }

    public function update_undangan_group($value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama' => $value['nama_grup'],
            'status_undangan' => $value['status_undangan'],
            'kuota_undangan' => $value['kuota'],
            'kuota_souvenir' => $value['kuota'],
        );

        $this->db->where('barcode', $value['barcode']);
        $this->db->update($this->table_barcode, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_status($id_barcode = '', $status = '') {
        $this->db->trans_begin();

        $data = array(
            'status_kehadiran' => $status,
            'kuota_undangan' => 0
        );

        $this->db->where('barcode', $id_barcode);
        $this->db->update($this->table_barcode, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_status_undangan_group($id_barcode = '') {
        $this->db->trans_begin();

        $this->db->query("UPDATE tabel_undangan SET kuota_undangan = kuota_undangan - 1, status_kehadiran = status_kehadiran + 1 WHERE barcode='$id_barcode'");

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_status_souvenir($id_barcode = '', $status = '') {
        $this->db->trans_begin();

        $data = array(
            'kuota_souvenir' => $status
        );

        $this->db->where('barcode', $id_barcode);
        $this->db->update($this->table_barcode, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function tambah_tamu($id_barcode = '', $nama = '', $asal = '') {
        $this->db->trans_begin();

        $data = array(
            'barcode' => $id_barcode,
            'nama_tamu' => $nama,
            'asal_tamu' => $asal
        );

        $this->db->insert($this->table_hadir, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_status_souvenir_group($id_barcode = '', $status = '') {
        $this->db->trans_begin();

        $this->db->query("UPDATE tabel_undangan SET kuota_souvenir = kuota_souvenir - '$status' WHERE barcode='$id_barcode'");

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_status_souvenir_group_id($id = '') {
        $this->db->trans_begin();

        $data = array(
            'souvenir' => 0
        );

        $this->db->where('id', $id);
        $this->db->update($this->table_hadir, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}

?>