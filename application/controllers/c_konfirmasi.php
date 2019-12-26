<?php
class c_konfirmasi extends CI_Controller{
    public function index(){
        $bukti["bayar"] = $this->model_pembayaran->getBukti();
        $this->load->view('header_admin');
        $this->load->view('konfirmasipembayaran', $bukti);
        $this->load->view('footer');
    }

    public function cekValid($id){
        $cek = $this->input->post('valid');

        $data=array(
            'validasi'=>$cek
        );
        $this->model_pembayaran->updateValid($data, $id);
        echo "<script>
                window.location.href='".base_url('c_konfirmasi')."';
             </script>";
    }
}
?>