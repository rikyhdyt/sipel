<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='mitra/mitra';
		$isi['sidebar']='sidebar/mitra_aktif';
		$isi['data']=$this->db->get('tb_mitra');
		$this->load->view('home',$isi);
	}

	public function tambahdata(){
		
		$data= array(
			'nm_mitra'=>$this->input->post('nm_mitra')
			);
		$this->Mmitra->add_data($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('mitra');

	}
	public function hapusdata($row){
	$this->Mmitra->delete_data($row);
	$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('mitra');
	
}

public function ubahdata(){
	$id=$this->input->post('id');
	$data=array(
		'nm_mitra'=>$this->input->post('nm_mitra')
		);
	$this->Mmitra->update_data($data,$id);
	$this->session->set_flashdata('notif', '<div class="alert alert-info alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-info-circle"></i> Data berhasil diubah
								</div>');
redirect('mitra');

}
}