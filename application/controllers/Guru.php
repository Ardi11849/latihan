<?php 

/**
  * 
  */
 class Guru extends CI_Controller
 {
     function __construct()
     {
         parent::__construct();
		 $this->load->model('guru_m');
     }
 	
 	public function index()
 	{
		$b['b'] = $this->guru_m->matpel();
 		$this->load->view("guru/index", $b);
 		if (isset($_POST['masuk'])) {
 			$a = $this->guru_m->login($_POST);
 			if (!$a) {
 				$this->session->set_flashdata('msg', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show"><center>
				 <span class="badge badge-pill badge-danger">Gagal</span>
				 Data yang anda masukan salah.
			 </div>');
 				redirect("Guru");
 			}else{
				$this->session->set_userdata('nama', $_POST['username']);
				$this->session->set_userdata('matpel', $_POST['matpel']);
				$this->session->set_flashdata('msg', '<div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
				<center><span class="badge badge-pill badge-info">Success</span>
				Hello Selamat Datang.
			</div>');
 				redirect("Dashboard_g");
 			}
 		}
	 }
	 
	 public function logout()
	 {
		 $this->session->sess_destroy();
		 redirect(base_url());
	 }
 }
  ?>