<?php
class c_status extends CI_Controller{
    public function index(){
        $var["status"] = $this->model_mobil->getMobilStatus();
        $this->load->view('header_admin');
        $this->load->view('statusmobil', $var);
        $this->load->view('footer');
    }

    public function gantiStatus($id){
        $cek = $this->input->post('valid');
        $arr = explode('%20',trim($id));
        $plat = implode(" ",$arr);
        $data=array(
            'Status'=>$cek
        );
        $this->model_mobil->gantiStatusMobil($data, $plat);
        $namaMobil = $this->model_mobil->cariNamaMobil($plat);
        $jumlah = $this->model_mobil->getJumlah($namaMobil);
        $this->model_mobil->tambahJumlah($namaMobil,$jumlah);
        echo "<script>
                window.location.href='".base_url('c_status')."';
             </script>";
        
    }
}
?>