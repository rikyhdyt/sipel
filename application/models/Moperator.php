<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moperator extends CI_model {
    
   
    public function add_data($data){
		$this->db->insert('tb_operator',$data);
		return true;	
    }
    public function delete_data($row)
		{
		$this->db->where('id_op',$row);
		return $this->db->delete('tb_operator');
		
    }
    public function update_data($data,$id){
		$this->db->where('id_op',$id);
		$this->db->update('tb_operator',$data);
		return true;
	}
	
}