<?php

class Admin extends CI_Controller
{
        function __construct(){
                parent::__construct();
                if(!$this->session->userdata('nama')){
                        redirect(base_url());
                }
        }
    public function index()
    {
        $this->load->model('admin_m');
        $a['a'] = $this->admin_m->tampil();
        $a['b'] = $this->admin_m->select();
        $a['ipa'] = $this->admin_m->IPA();
        $a['ips'] = $this->admin_m->IPS();
        $a['pai'] = $this->admin_m->PAI();
        $a['pkn'] = $this->admin_m->PKN();
        $a['ind'] = $this->admin_m->Indo();
        $a['igs'] = $this->admin_m->Inggris();
        $a['sbk'] = $this->admin_m->Senbud();
        $a['pk'] = $this->admin_m->Prakarya();  
        $a['olh'] = $this->admin_m->olahraga();      
        $this->load->view('Admin/dashboard', $a);
    }
    

    public function simpan()
    {
            $this->load->model('admin_m');
            $config['upload_path']          = './images/guru/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100000;
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {;
                    $this->load->view('Admin/tambah_p');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $this->admin_m->simpan($_POST);
                    redirect(base_url('index.php/Admin'));
            }
    }
    
    public function ubah($NIK)
    {
        $this->load->model('admin_m');
        $this->db->where('NIK',$NIK);
        $query = $this->db->get('guru');
        $row = $query->row();
   
        unlink("./images/guru/$row->Foto");
        $config['upload_path']          = './images/guru/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {;
                $this->load->view('Admin/tambah_p');
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $this->admin_m->update($_POST);
                redirect(base_url('index.php/Admin'));
        }
    }

    public function delete($NIK)
    {
        $this->db->where('NIK',$NIK);
        $query = $this->db->get('guru');
        $row = $query->row();
   
        unlink("./images/guru/$row->Foto");
   
        
        $this->db->delete('nilai', array('NIK' => $NIK));
        $this->db->delete('guru', array('NIK' => $NIK));
        redirect(base_url()."index.php/Admin");
    }
}
?>