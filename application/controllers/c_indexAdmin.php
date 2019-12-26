<?php
class c_indexAdmin extends CI_Controller{
	public function index(){
        $this->load->view('header_admin');
        $this->load->view('index');
        $this->load->view('footer');
	}
}
?>