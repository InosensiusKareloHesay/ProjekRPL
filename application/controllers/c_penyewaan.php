<?php
class c_penyewaan extends CI_Controller{
    public function index(){
        $sewa["mobil"] = $this->model_mobil->getMobil();
        $this->load->view('header');
        $this->load->view('penyewaan', $sewa);
        $this->load->view('footer');
    }

    public function sewa(){
        $var = $this->model_penyewaan->getCek($this->session->userdata('name'));
        if($var == 0){

            $book = $this->input->post('pick_date');
            $balik = $this->input->post('off_date');

            $datetime1 = strtotime($book);
            $datetime2 = strtotime($balik);
            $secs = $datetime2 - $datetime1;
            $days = $secs / 86400;

            if ($days < 0){
                echo "<script>
                    window.location.href ='".base_url('/c_penyewaan')."';
                    alert('Reservasi Gagal!');
                </script>";
            } else {
                $namaMobil = $this->model_mobil->getNamaMobil($this->input->post('id_mobil'));
                $harga = $this->model_mobil->getHargaMobil($this->input->post('id_mobil'));
                $totalharga=$harga*$days;
                $lama=$days;

                $data = $this->model_mobil->getPlat($namaMobil);
                $plat = $data[0]->Plat_Mobil;
                $this->model_mobil->gantiStatusBooking($plat);
                $nama = $this->session->userdata('name');
                $this->model_penyewaan->insert_sewa($nama, $plat, $book, $balik, $totalharga, $namaMobil);
                $jumlah = $this->model_mobil->getJumlah($namaMobil);
                $this->model_mobil->kurangiJumlah($namaMobil,$jumlah);
                echo "<script>
                    window.location.href ='".base_url('/c_index')."';
                    alert('Reservasi sukses!');
                    </script>";
            }
        } else {
            echo "<script>
                    window.location.href ='".base_url('/c_penyewaan')."';
                    alert('Anda Sudah Menyewa Kendaraan!');
                </script>";
        }
    }
}


?>