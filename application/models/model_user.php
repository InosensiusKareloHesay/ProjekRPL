<?php
class model_user extends CI_Model {
	public $table = 'pengunjung';
	public $primary_key = 'ID_Pengunjung';

	public function getUser($id){
        return $this->db->get_where($this->table,array('ID_Pengunjung'=>$id))->result_array();
	}

	public function update($id,$data){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table,$data);
	}

}
?>