<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpesanan extends CI_Model {

    public function pilihop(){
		$query=$this->db->query('SELECT * FROM tb_operator');
		return $query->result();
	}

	public function pilihgudang(){
		$query=$this->db->query('SELECT * FROM tb_gudang');
		return $query->result();
	}

	public function pilihsaluran(){
		$query=$this->db->query('SELECT * FROM tb_saluran');
		return $query->result();
	}

	public function pilihkomoditi(){
		$query=$this->db->query('SELECT * FROM tb_komoditi');
		return $query->result();
	}

	public function pilihharga(){
		$query=$this->db->query('SELECT * FROM tb_harga');
		return $query->result();
	}

	public function pilihmitra($title){
        $this->db->like('nm_mitra', $title , 'both');
        $this->db->order_by('nm_mitra', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_mitra')->result();
    }

	public function getnota(){
		$this->db->order_by('no_nota', 'DESC');
        $this->db->limit(1);
        return $this->db->get('tb_nota')->result();
	}

	public function add_nota($data){
		$this->db->insert('tb_nota',$data);
		return true;	
	}
	public function add_pesanan($data){
		$this->db->insert('tb_pesanan',$data);
		return true;	
	}
	public function simpan_pesanan($total, $data, $kd_nota){
			$this->db->insert('tb_pesanan',$data);
			//query update nota belum selesai
			$this->db->query("update tb_nota set ttl_harga='$total' where no_nota='$kd_nota'");
		
		return true;
	}

}