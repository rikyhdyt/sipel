<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_model {
    
    public function jmlh_komoditi(){
        $sql="select count(id_komoditi) as id from tb_komoditi";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }
}