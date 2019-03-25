<?php

class Admin_m extends CI_Model
{
    public function tampil()
    {
        $a = $this->db->query('select guru.*, matpel.Nama_matpel from matpel, guru where guru.Kode_matpel = matpel.Kode_matpel');
        return $a->result_array();
    }


    // Mulai Menghitung Guru
    public function IPA()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P001'");
        return $a->row()->matpel;
    }
    public function IPS()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P002'");
        return $a->row()->matpel;
    }
    public function PAI()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P003'");
        return $a->row()->matpel;
    }
    public function PKN()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P004'");
        return $a->row()->matpel;
    }
    public function Indo()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P005'");
        return $a->row()->matpel;
    }
    public function Senbud()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P007'");
        return $a->row()->matpel;
    }
    public function Prakarya()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P008'");
        return $a->row()->matpel;
    }
    public function olahraga()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P009'");
        return $a->row()->matpel;
    }
    public function Inggris()
    {
        $a = $this->db->query("select count(Kode_matpel) as matpel from guru where Kode_matpel = 'P006'");
        return $a->row()->matpel;
    }
    // Selesai Menghitung Guru


    public function select()
    {
        $a = $this->db->query("select * from matpel");
        return $a->result_array();
    }

    public function simpan($post)
    {
        $a = $this->db->escape($post['nik']);
        $b = $this->db->escape($post['nama']);
        $c = $this->db->escape($post['password']);
        $d = $this->db->escape($post['matpel']);
        $e = $this->db->escape($post['alamat']);
        $f = $this->db->escape($post['tgl_masuk']);
        $img = $this->upload->data();
        $g = $img['file_name'];

        $h = $this->db->query("insert into guru values ($a,$b, $c, $d, $e, $f, '$g')");
        if ($h)
            return true;
            return false;
    }

    public function update($post)
    {
        $a = $this->db->escape($post['nik']);
        $b = $this->db->escape($post['nama']);
        $c = $this->db->escape($post['password']);
        $d = $this->db->escape($post['matpel']);
        $e = $this->db->escape($post['alamat']);
        $f = $this->db->escape($post['tgl_masuk']);
        $img = $this->upload->data();
        $g = $img['file_name'];

        $h = $this->db->query("update guru set Nik = $a, Nama_g = $b, Password = $c, Kode_matpel = $d, Alamat = $e, Tgl_masuk = $f, Foto = '$g' where NIK = $a");
        if($h)
        return true;
        return false;
    }

    public function hapus($NIK)
    {
        $a = $this->db->query("select Foto from guru where NIK = '$NIK'");
        return $a->result_array();
        unlink("./images/$a->Foto");
    }
}
