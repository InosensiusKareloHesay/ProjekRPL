<?php
class c_register extends CI_Controller{
    public function index(){
        $this->load->view('header_home');
        $this->load->view('register');
        $this->load->view('footer');
    }
    public function do_register(){
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $noTelp=$this->input->post('noTelp');
        $cekHP = $this->model_register->cekHP($noTelp);
        if($cekHP != 0){
            echo "<script>
                window.location.href='".base_url('c_register')."';
                alert('No Telp sudah digunakan');
             </script>";
        }
        $ktp=$this->input->post('ktp');
        $cekKTP = $this->model_register->cekKTP($ktp);
        if($cekKTP != 0){
            echo "<script>
                window.location.href='".base_url('c_register')."';
                alert('No KTP sudah digunakan');
             </script>";
        }
        $sim=$this->input->post('sim');
        $cekSIM = $this->model_register->cekSIM($sim);
        if($cekSIM != 0){
            echo "<script>
                window.location.href='".base_url('c_register')."';
                alert('No SIM sudah digunakan');
             </script>";
        }
        $email=$this->input->post('email');
        $cekEmail = $this->model_register->cekEmail($email);
        if($cekEmail != 0){
            echo "<script>
                window.location.href='".base_url('c_register')."';
                alert('Email sudah digunakan');
             </script>";
        }
        $password=$this->input->post('password');
        if($cekHp == 0 && $cekKTP == 0 && $cekSIM == 0 && $cekEmail == 0){
            $data=array(
                'Nama'=>$nama,
                'Alamat'=>$alamat,
                'No_Hp'=>$noTelp,
                'No_KTP'=>$ktp,
                'No_SIM'=>$sim,
                'Email'=>$email,
                'Password'=>$password
            );
            $this->model_register->register($data);
            echo "<script>
                    window.location.href='".base_url('c_login')."';
                    alert('Register berhasil!');
            </script>";
        } else {
            echo "<script>
                    window.location.href='".base_url('c_login')."';
                    alert('Register gagal!');
            </script>";
        }
    }
}
?>