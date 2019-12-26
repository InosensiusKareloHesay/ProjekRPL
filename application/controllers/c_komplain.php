<?php
class c_komplain extends CI_Controller{
    public function index(){
        $this->load->view('header');
        $this->load->view('komplain');
        $this->load->view('footer');
    }

    public function do_komplain(){
        $id_user=$this->session->userdata('id');
        $nama=$this->session->userdata('name');
        $isi=$this->input->post('komplain');
        $data=array(
            'ID_Pengunjung'=>$id_user,
            'Nama'=>$nama,
            'Keterangan'=>$isi
        );
        $this->model_komplain->Komplain($isi);
        echo "<script>
            window.location.href ='".base_url('/c_index')."';
            alert('Komplain success!');
            </script>";
    }
}
?>