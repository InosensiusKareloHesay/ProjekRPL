<?php

class model_penyewaan extends CI_Model {

	public $table = 'penyewaan';

	public function get_sewa() {
		$this->load->database();

		$query = $this->db->get($table);

		return $query->result();
	}
	public function insert_sewa($nama, $plat_mobil, $pinjam, $kembali, $totalharga, $namaMobil) {
		$temp = 'Terpinjam';
		$kode = $this->kodeTransaksi();
		$this->load->database();
		$data = array(
			'kode_transaksi' => $kode,
			'Plat_Mobil' => $plat_mobil,
			'Nama_Mobil' => $namaMobil,
			'Nama_Peminjam' => $nama,
			'Tgl_Pinjam' => $pinjam,
			'Tgl_Kembali' => $kembali,
			'Harga' => $totalharga,
			'Status' => $temp
		);
		$this->db->insert($this->table, $data);
	}
	public function kodeTransaksi(){
		$name = $this->session->userdata('name');
		return rand().substr($name, -1);
	}

	public function getCek($nama){
		$cek = $this->db->where('validasi',0)
            ->where('Nama_Peminjam',$nama)
			->count_all_results('penyewaan');
		if($cek < 1){
			return 0;
		} else {
			return 1;
		}
	}

	public function get_sewa_v2($id) {
		$this->load->database();
		$this->db->where('id', $id);
		$query = $this->db->get('penyewaan');

		return $query->result();
	}
	

}
