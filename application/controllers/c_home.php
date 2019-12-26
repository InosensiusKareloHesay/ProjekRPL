<?php
class c_home extends CI_Controller{
    public function index(){
        $this->load->view('header_home');
        $this->load->view('index');
        $this->load->view('footer');
    }
}
?>