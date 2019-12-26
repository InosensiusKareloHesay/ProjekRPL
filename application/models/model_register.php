<?php
class model_register extends CI_Model {
	
	public $table = 'pengunjung';

	public function register($data){
		$this->db->insert($this->table,$data);
	}

	public function cekHP($data){
		$cek = $this->db->where('No_Hp',$data)
			->count_all_results('pengunjung');
		if($cek == 0){
			return 0;
		} else {
			return 1;
		}
	}

	public function cekKTP($data){
		$cek = $this->db->where('No_KTP',$data)
			->count_all_results('pengunjung');
		if($cek == 0){
			return 0;
		} else {
			return 1;
		}
	}

	public function cekSIM($data){
		$cek = $this->db->where('No_SIM',$data)
			->count_all_results('pengunjung');
		if($cek == 0){
			return 0;
		} else {
			return 1;
		}
	}

	public function cekEmail($data){
		$cek = $this->db->where('Email',$data)
			->count_all_results('pengunjung');
		if($cek == 0){
			return 0;
		} else {
			return 1;
		}
	}
}
?>