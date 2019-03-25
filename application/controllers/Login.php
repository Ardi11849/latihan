<?php 

/**
  * 
  */
 class Login extends CI_Controller
 {
 	
 	public function index()
 	{
 		$this->load->view("Admin/index");
		 $this->load->model('login_m');
 		if (isset($_POST['masuk'])) {
 			$a = $this->login_m->admin($_POST);
 			if (!$a) {
 				$this->session->set_flashdata('msg', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show"><center>
				 <span class="badge badge-pill badge-danger">Gagal</span>
				 Data yang anda masukan salah.
			 </div>');
 				redirect("Login");
 			}else{
				$this->session->set_userdata('nama', $_POST['username']);
				$this->session->set_flashdata('msg', '<div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
				<center><span class="badge badge-pill badge-info">Success</span>
				Hello Selamat Datang.
			</div>');
 				redirect("Admin");
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