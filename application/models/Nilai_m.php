<?php

class Nilai_m extends CI_Model
{
    
    public function tampil()
    {
        $a = $this->db->query("select kelas.Kelas, murid.Nama, guru.Nama_g, matpel.Nama_matpel, nilai.* from murid, matpel, guru, nilai, kelas where murid.Kode_kelas = kelas.Kode_kelas and murid.NIS = nilai.NIS and matpel.Kode_matpel = nilai.Kode_matpel and guru.NIK = nilai.NIK");
        return $a->result_array();
    }

    public function murid()
    {
        $a = $this->db->query("select * from murid");
        return $a->result_array();
    }

    public function guru()
    {
        $a = $this->db->query("select * from guru");
        return $a->result_array();
    }
    public function matpel()
    {
        $a = $this->db->query("select * from matpel");
        return $a->result_array();
    }

    public function simpan($post)
    {
        $a = $this->db->escape($post['kode']);
        $b = $this->db->escape($post['matpel']);
        $c = $this->db->escape($post['nama']);
        $d = $this->db->escape($post['guru']);
        $e = $this->db->escape($post['nilai_h']);
        $f = $this->db->escape($post['nilai_u']);
        $g = $this->db->escape($post['nilai']);

        $h = $this->db->query("INSERT INTO nilai VALUES ($a, $b, $d, $c, $e, $f, $g)");
        if($h)
        return true;
        return false;
    }

    public function ubah($post)
    {
        $a = $this->db->escape($post['kode']);
        $b = $this->db->escape($post['matpel']);
        $c = $this->db->escape($post['nama']);
        $d = $this->db->escape($post['guru']);
        $e = $this->db->escape($post['nilai_h']);
        $f = $this->db->escape($post['nilai_u']);
        $g = $this->db->escape($post['nilai']);

        $h = $this->db->query("Update nilai set Nilai_h = $e, Nilai_u = $f, Nilai = $g where Kode_nilai = $a");
        if($h)
        return true;
        return false;
    }
}
