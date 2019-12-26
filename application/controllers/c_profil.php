<?php
class c_profil extends CI_Controller{
    public function index(){
        $var["profil"]=$this->model_user->getUser($this->session->userdata("id"));
        $cekUser = $this->model_login->get_cekUser($this->session->userdata("name"));
        if($cekUser == 0){
            $this->load->view('header');
        } else {
            $this->load->view('header_admin');
        }
        $this->load->view('profil',$var);
        $this->load->view('footer');
    }
}
?>