<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkomoditi extends CI_model {
    
   
    public function add_data($data){
		$this->db->insert('tb_komoditi',$data);
		return true;	
    }
    public function delete_data($row)
		{
		$this->db->where('id_komoditi',$row);
		return $this->db->delete('tb_komoditi');
		
    }
    public function update_data($data,$id){
		$this->db->where('id_komoditi',$id);
		$this->db->update('tb_komoditi',$data);
		return true;
	}
	
}