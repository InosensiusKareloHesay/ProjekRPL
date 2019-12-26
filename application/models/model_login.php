<?php
class model_login extends CI_Model {

	public function login($email, $password){
		$cek = array('Email' => $email, 'Password' => $password );
		$log = $this->db->get_where('pengunjung', $cek);

			if ($log->num_rows()==1) {
				return true;
			}else {
				return false;
			}
	}

	function get_id($data){
		$query = "SELECT ID_Pengunjung from pengunjung where Email = ?";
 		$result = $this->db->query($query, array($data))->result_array();
 		foreach ($result as $row)
 		{
 			$user_id = $row['ID_Pengunjung'];
 		}
 		return $user_id;
	}

	function get_cekUser($data){
		$query = "SELECT cekUser from pengunjung where Email = ?";
 		$result = $this->db->query($query, array($data))->result_array();
 		foreach ($result as $row)
 		{
 			$cekUser = $row['cekUser'];
 		}
 		return $cekUser;
	}

}?>