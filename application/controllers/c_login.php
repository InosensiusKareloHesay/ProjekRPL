<?php
class c_login extends CI_Controller{
    public function index(){
        $this->load->view('header_home');
        $this->load->view('login');
        $this->load->view('footer');
    }
	
    public function do_login()
	{
		$this->load->model('model_login');
		$user = $this->session->userdata('name');
		$user_id = $this->model_login->get_id($this->input->post('email'));

		if($this->model_login->login($this->input->post('email'), $this->input->post('password'))==TRUE){
			$this->session->set_userdata("id", $user_id);
		 	$this->session->set_userdata("name", $this->input->post('email'));
			$this->session->set_userdata("login", TRUE);
			$cekUser = $this->model_login->get_cekUser($this->input->post('email'));
			if($cekUser == 0){
				echo "<script>  
		 			window.location.href='".base_url('/c_index')."';
		 			alert('Login Berhasil!');
                </script>";
			} else {
				echo "<script>  
		 			window.location.href='".base_url('/c_indexAdmin')."';
		 			alert('Login Berhasil!');
                </script>";
			}
		 	
		}else{
		 	echo "<script>
                    window.location.href='".base_url('c_login')."';
                    alert('Email / Password anda salah');
                </script>";
		}
	}
	
	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>