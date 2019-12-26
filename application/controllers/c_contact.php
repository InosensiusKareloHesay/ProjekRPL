<?php
class c_contact extends CI_Controller{
    public function index(){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }
}
?>