<?php
class model_komplain extends CI_Model {
    
    public $table = 'komplain';

    public function Komplain($isi){
		  $this->db->insert($this->table,$isi);
    }
    
    public function getList(){
      return $this->db->get('komplain')->result_array();
    }
}?>