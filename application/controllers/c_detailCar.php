<?php
class c_detailCar extends CI_Controller{
    public function getMobil($nama){
        $arr = explode('%20',trim($nama));
        $namaMobil = implode(" ",$arr);
    	$data['mobil'] = $this->model_mobil->getInfoMobil($namaMobil);
        $this->load->view('header');
        $this->load->view('detailCar', $data);
        $this->load->view('footer');
    }

}
?>