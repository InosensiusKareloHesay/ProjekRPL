<?php
class c_car extends CI_Controller{
    public function index(){
    	$var['mobil'] = $this->model_mobil->getMobil();
        $this->load->view('header');
        $this->load->view('car', $var);
        $this->load->view('footer');
    }
}
?>