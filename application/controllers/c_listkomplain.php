<?php
class c_listkomplain extends CI_Controller{
    public function index(){
        $list["komplain"] = $this->model_komplain->getList();
        $this->load->view('header_admin');
        $this->load->view('listkomplain', $list);
        $this->load->view('footer');
    }
}
?>