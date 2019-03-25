<?php

class Guru_m extends CI_Model
{
    // Login
    public function matpel()
    {
        $a = $this->db->query("select Kode_matpel, Nama_matpel from matpel");
        return $a->result_array();
    }
    public function login($post)
    {
        $b = $this->db->escape($post['username']);
        $c = $this->db->escape($post['password']);
        $d = $this->db->escape($post['matpel']);
        $a = $this->db->query("select * from guru where Nama_g = $b and Password = $c and Kode_matpel = $d ");
        return $a->result_array();
    }
    // END Login

    // Dashboard Guru
    public function tampil()
    {
        $b = $this->session->userdata('matpel');
        $a = $this->db->query("select kelas.Kelas, murid.Nama, guru.Nama_g, matpel.Nama_matpel, nilai.* from murid, matpel, guru, nilai, kelas where murid.Kode_kelas = kelas.Kode_kelas and murid.NIS = nilai.NIS and matpel.Kode_matpel = nilai.Kode_matpel and guru.NIK = nilai.NIK and guru.Kode_matpel = '$b'");
        return $a->result_array();
    }
    public function tampilk()
    {
        $a = $this->db->query("select * from kelas");
        return $a->result_array();
    }
    public function tampilm()
    {
        $a = $this->db->query("select * from murid");
        return $a->result_array();
    }
    public function tampilg()
    {
        $b = $this->session->userdata('nama');
        $a = $this->db->query("select * from guru where Nama_g = '$b'");
        return $a->result_array();
    }
    public function tampilmp()
    {
        $b = $this->session->userdata('matpel');
        $a = $this->db->query("select guru.*, matpel.* from guru, matpel where guru.Kode_matpel = '$b' and guru.Kode_matpel = matpel.Kode_matpel");
        return $a->result_array();
    }
    // End Dashboard Guru
}
