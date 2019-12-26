<?php
class c_profilEdit extends CI_Controller{
    public function index(){
        $var["profil"]=$this->model_user->getUser($this->session->userdata("id"));
        $cekUser = $this->model_login->get_cekUser($this->session->userdata("name"));
        if($cekUser == 0){
            $this->load->view('header');
        } else {
            $this->load->view('header_admin');
        }
        $this->load->view('profilEdit',$var);
        $this->load->view('footer');
    }

    public function edit(){
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $noTelp=$this->input->post('noTelp');
        $ktp=$this->input->post('ktp');
        $sim=$this->input->post('sim');
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $data=array(
            'Nama'=>$nama,
            'Alamat'=>$alamat,
            'No_Hp'=>$noTelp,
            'No_KTP'=>$ktp,
            'No_SIM'=>$sim,
            'Email'=>$email,
            'Password'=>$password
        );

        $this->model_user->update($this->session->userdata("id"),$data);
        redirect(base_url('/c_profil'));
    }
}
?>