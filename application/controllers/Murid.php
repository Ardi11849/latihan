<?php 


class Murid extends CI_Controller
{
		function __construct()
		{
            parent::__construct();
        $this->load->model("murid_m");
        if(!$this->session->userdata['nama']){
            redirect(base_url());
        }
    }
    public function index()
    {
        $a['a'] = $this->murid_m->tampil();
        $a['X'] = $this->murid_m->X();
        $a['XI'] = $this->murid_m->XI();
        $a['XII'] = $this->murid_m->XII();
        $a['k'] = $this->murid_m->kelas();
        $a['ku'] = $this->murid_m->kelas();
        $this->load->view("Admin/murid/index", $a);
    }

    public function X()
    {
        $a['a'] = $this->murid_m->tampilX();
        $this->load->view("Admin/murid/X", $a);
    }

    public function XI()
    {
        $a['a'] = $this->murid_m->tampilXI();
        $this->load->view("Admin/murid/X", $a);
    }

    public function XII()
    {
        $a['a'] = $this->murid_m->tampilXII();
        $this->load->view("Admin/murid/X", $a);
    }

    public function simpan()
    {
        $config['upload_path'] = './images/murid/';
        $config['max_size'] = 1000000;
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_width'] = 5000;
        $config['max_height'] = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            echo 'error';
        }else {
            array('upload_data' => $this->upload->data());
            $this->murid_m->simpan($_POST);
            redirect(base_url()."index.php/Murid");
        }
    }

    public function ubah($NIS)
    {
        $this->db->where("NIS",$NIS);
        $a = $this->db->get("murid");
        $b = $a->row();
        unlink("./images/murid/$b->Foto");
        $config['upload_path'] = './images/murid/';
        $config['max_size'] = 1000000;
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_width'] = 5000;
        $config['max_height'] = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            echo 'error';
        } else {
            array('upload_data' => $this->upload->data());
            $this->murid_m->ubah($_POST);
            redirect(base_url()."index.php/Murid");
        }
        
    }

    public function delete($NIS)
    {
        $this->db->where("NIS",$NIS);
        $a = $this->db->get("murid");
        $b = $a->row();
        unlink("./images/murid/$b->Foto");

        $this->db->delete("nilai", array("NIS" => $b->NIS));
        $this->db->delete("murid", array("NIS" => $NIS));
        redirect(base_url()."index.php/murid/index");
    }
}
