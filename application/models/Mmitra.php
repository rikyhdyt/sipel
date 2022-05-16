<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmitra extends CI_model {
    
   
    public function add_data($data){
		$this->db->insert('tb_mitra',$data);
		return true;	
    }
    public function delete_data($row)
		{
		$this->db->where('id',$row);
		return $this->db->delete('tb_mitra');
		
    }
    public function update_data($data,$id){
		$this->db->where('id',$id);
		$this->db->update('tb_mitra',$data);
		return true;
	}
	
}