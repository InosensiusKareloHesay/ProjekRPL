<?php
    class model_pembayaran extends CI_Model {
        public $table = 'penyewaan';

        public function simpanGambar($nama, $data){
            $this->db->where('Nama_Peminjam',$nama);
            $this->db->update($this->table,$data);
        }
        
        public function getBukti(){
            $cek = array('validasi' => 0);
            return $this->db->get_where('penyewaan', $cek)->result_array();
        }

        public function getBayar($nama){
            return $this->db->where('validasi',0)
            ->where('Nama_Peminjam',$nama)
            ->count_all_results('penyewaan');
        }

        public function updateValid($data,$id){
            $this->db->where('kode_transaksi',$id);
            $this->db->update($this->table,$data);
        }
    }
?>