<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgudang extends CI_model {
    
   
    public function add_data($data){
		$this->db->insert('tb_gudang',$data);
		return true;	
    }
    public function delete_data($row)
		{
		$this->db->where('id_gdng',$row);
		return $this->db->delete('tb_gudang');
		
    }
    public function update_data($data,$id){
		$this->db->where('id_gdng',$id);
		$this->db->update('tb_gudang',$data);
		return true;
	}
	
}