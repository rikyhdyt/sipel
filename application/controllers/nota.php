<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='nota/nota';
		$isi['sidebar']='sidebar/nota_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_nota where tanggal=''" );
		$this->load->view('home',$isi);
	}

	public function filter(){

		$tanggal=$this->input->post('tanggal');

		$this->Msecurity->getsecurity();
		$isi['content']='nota/nota';
		$isi['sidebar']='sidebar/nota_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_nota where tanggal='$tanggal'" );
		$this->load->view('home',$isi);
	}

	public function cetak_id($id){
		$isi['cetak']=$this->db->query("select * from tb_nota join tb_saluran on tb_nota.id_saluran=tb_saluran.id_saluran 
			join tb_gudang on tb_nota.kd_gdng=tb_gudang.id_gdng 
			join tb_operator on tb_nota.id_operator=tb_operator.id_op
			where id='$id'")->row();
		$isi['komoditi']=$this->db->query("select * from tb_pesanan 
		join tb_komoditi on tb_pesanan.id_barang=tb_komoditi.id_komoditi 
		join tb_nota on tb_pesanan.kd_nota=tb_nota.no_nota
		where id='$id'");
		$this->load->view('pesanan/cetak_nota',$isi);
	}
}

