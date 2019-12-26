<?php

class model_mobil extends CI_Model {

	public function getMobil() {
		$query = $this->db->get('jenis_mobil');
		return $query->result_array();
	}

	public function getMobil_V1($nama) {
		$query = $this->db->where('mobil', $nama);
		return $query->result();
	}

	public function getMobilStatus() {
		return $this->db->get('mobil')->result_array();
	}

	public function getPlat($nama) {
		$status = 'Ready';
		$query = $this->db->get_where('mobil', array('Nama_Mobil' => $nama, 'Status' => $status));

		return $query->result();
	}
	
	public function gantiStatusBooking($plat) {
		$status = 'Booking';
		$data=array(
			'Status'=> $status
	 	);
		$this->db->where('Plat_Mobil',$plat);
		$this->db->update('mobil',$data);
	}

	public function gantiStatusMobil($data, $id) {
		$this->db->where('Plat_Mobil',$id);
        $this->db->update('mobil',$data);
	}

	public function getInfoMobil($nama){
		return $this->db->get_where('jenis_mobil',array('Nama_Mobil'=>$nama))->result_array();
	}

	public function cariNamaMobil($plat){
		$query = "SELECT Nama_Mobil from mobil where Plat_Mobil = ?";
 		$result = $this->db->query($query, array($plat))->result_array();
 		foreach ($result as $row)
 		{
 			$nama = $row['Nama_Mobil'];
 		}
 		return $nama;
	}

	public function getNamaMobil($id_mobil){
		$query = "SELECT Nama_Mobil from jenis_mobil where id_mobil = ?";
 		$result = $this->db->query($query, array($id_mobil))->result_array();
 		foreach ($result as $row)
 		{
 			$nama = $row['Nama_Mobil'];
 		}
 		return $nama;
	}

	public function getHargaMobil($id_mobil){
		$query = "SELECT Harga from jenis_mobil where id_mobil = ?";
 		$result = $this->db->query($query, array($id_mobil))->result_array();
 		foreach ($result as $row)
 		{
 			$harga = $row['Harga'];
 		}
 		return $harga;
	}



	public function getJumlah($nama){
		$query = "SELECT jumlah from jenis_mobil where Nama_Mobil = ?";
 		$result = $this->db->query($query, array($nama))->result_array();
 		foreach ($result as $row)
 		{
 			$total = $row['jumlah'];
 		}
 		return $total;
	}

	public function kurangiJumlah($nama, $total){
		$data=array(
			'jumlah'=>$total-1
		);
		$this->db->where('Nama_Mobil',$nama);
        $this->db->update('jenis_mobil',$data);
	}

	public function tambahJumlah($nama, $total){
		$data=array(
			'jumlah'=>$total+1
		);
		$this->db->where('Nama_Mobil',$nama);
        $this->db->update('jenis_mobil',$data);
	}

	}
?>
