<?php
class c_pembayaran extends CI_Controller{
    public function index(){
        $var = $this->model_pembayaran->getBayar($this->session->userdata('name'));
        $this->load->view('header');
        if($var == 0){
            $this->load->view('pembayaran_kosong');
        } else {
            $this->load->view('pembayaran');
        }
        $this->load->view('footer');
    }

    public function uploadGambar(){
        $config['upload_path']          = './gambarTransaksi/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10240;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('file')){
            echo "<script>  
		 			window.location.href='".base_url('/c_pembayaran')."';
		 			alert('Type Gambar Tidak Sesuai!');
                 </script>";
        } else {
            $result=$this->upload->data();
            $uploaded=array('img'=>$result);

            $data=array(
            'Photo'=>$uploaded['img']['file_name']
            );

            $name = $this->session->userdata('name');
            $this->model_pembayaran->simpanGambar($name,$data);
            echo "<script>  
                        window.location.href='".base_url('/c_index')."';
                        alert('Kirim Bukti Success!');
                    </script>";
        }
    }
}
?>