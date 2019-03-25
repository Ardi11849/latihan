<?php

class Dashboard_g extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('guru_m');
        $this->load->model("nilai_m");
        if (!$this->session->userdata('nama')) {
            redirect(base_url());
        }
    }
    public function index()
    {
        $a['a'] = $this->guru_m->tampil();
        $a['k'] = $this->guru_m->tampilk();
        $a['b'] = $this->guru_m->tampilm();
        $a['c'] = $this->guru_m->tampilg();
        $a['d'] = $this->guru_m->tampilmp();
        $a['e'] = $this->guru_m->tampilmp();
        $this->load->view("guru/dashboard", $a);
    }

    public function simpan()
    {
        $this->nilai_m->simpan($_POST);
        redirect(base_url()."index.php/Dashboard_g");
    }

    public function ubah($Kode_nilai)
    {
        $this->nilai_m->ubah($_POST);
        redirect(base_url()."index.php/Dashboard_g");
    }

    public function delete($Kode_nilai)
    {
        $this->db->delete('nilai', array('Kode_nilai' => $Kode_nilai));
        redirect(base_url()."index.php/Dashboard_g");
    }
}
?>
