<?php 

class Murid_m extends CI_Model
{
    // tampil
    public function tampil()
    {
        $a = $this->db->query("select murid.*, kelas.* from kelas, murid where kelas.Kode_kelas = murid.Kode_kelas");
        return $a->result_array();
    }
    public function tampilX()
    {
        $a = $this->db->query("select kelas.*, murid.* from kelas, murid where kelas = 'X' and murid.Kode_kelas = kelas.Kode_kelas");
        return $a->result_array();
    }
    public function tampilXI()
    {
        $a = $this->db->query("select kelas.*, murid.* from kelas, murid where kelas = 'XI' and murid.Kode_kelas = kelas.Kode_kelas");
        return $a->result_array();
    }
    public function tampilXII()
    {
        $a = $this->db->query("select kelas.*, murid.* from kelas, murid where kelas = 'XII' and murid.Kode_kelas = kelas.Kode_kelas");
        return $a->result_array();
    }
    public function kelas()
    {
        $a = $this->db->query("select * from kelas");
        return $a->result_array();
    }
    // Selesai Tampil

    // Hitung
    public function X()
    {
        $a = $this->db->query("select count(Kode_kelas) as Kode_kelas from murid where Kode_kelas = 'K001'");
        return $a->row()->Kode_kelas;
    }
    public function XI()
    {
        $a = $this->db->query("select count(Kode_kelas) as Kode_kelas from murid where Kode_kelas = 'K002'");
        return $a->row()->Kode_kelas;
    }
    public function XII()
    {
        $a = $this->db->query("select count(Kode_kelas) as Kode_kelas from murid where Kode_kelas = 'K003'");
        return $a->row()->Kode_kelas;
    }
    // Selesai

    public function simpan($post)
    {
        $a = $this->db->escape($post['nis']);
        $b = $this->db->escape($post['nama']);
        $c = $this->db->escape($post['password']);
        $d = $this->db->escape($post['kelas']);
        $e = $this->db->escape($post['alamat']);
        $f = $this->db->escape($post['wali']);
        $img = $this->upload->data();
        $g = $img['file_name'];

        $h = $this->db->query("insert into murid values ($a, $b, $c, $d, $e, $f, '$g')");
        if($h)
        return true;
        return false;
    }

    public function ubah($post)
    {
        $a = $this->db->escape($post['nis']);
        $b = $this->db->escape($post['nama']);
        $c = $this->db->escape($post['password']);
        $d = $this->db->escape($post['kelas']);
        $e = $this->db->escape($post['alamat']);
        $f = $this->db->escape($post['wali']);
        $img = $this->upload->data();
        $g = $img['file_name'];

        $h = $this->db->query("update murid set NIS = $a, Nama = $b, Password = $c, Kode_kelas = $d, Alamat = $e, Wali = $f, Foto = '$g' where NIS = $a");
        if ($h)
        return true;
        return false;
    }
}
