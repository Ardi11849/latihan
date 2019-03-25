<?php

class Nilai extends CI_Controller 
{

    function __construct(){
        parent::__construct();
        $this->load->model("nilai_m");
        if (!$this->session->userdata('nama')) {
            redirect(base_url());
        }
    }
    public function index()
    {
        $a['a'] = $this->nilai_m->tampil();
        $a['b'] = $this->nilai_m->murid();
        $a['c'] = $this->nilai_m->guru();
        $a['d'] = $this->nilai_m->matpel();
        $this->load->view("Admin/nilai/index", $a);
    }

    public function simpan()
    {
        $this->nilai_m->simpan($_POST);
        redirect(base_url()."index.php/Nilai");
    }

    public function ubah($Kode_nilai)
    {
        $this->nilai_m->ubah($_POST);
        redirect(base_url()."index.php/Nilai");
    }

    public function delete($Kode_nilai)
    {
        $this->db->delete('nilai', array('Kode_nilai' => $Kode_nilai));
        redirect(base_url()."index.php/Nilai");
    }
}
