<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='gudang/data_gudang';
		$isi['sidebar']='sidebar/gudang_aktif';
		$isi['data']=$this->db->get('tb_gudang');
		$this->load->view('home',$isi);
	}

	public function tambahdata(){
		
		$data= array(
			'id_gdng'=>$this->input->post('id_gdng'),
			'nm_gdng'=>$this->input->post('nm_gdng')
			);
		$this->Mgudang->add_data($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('gudang');

	}
	public function hapusdata($row){
	$this->Mgudang->delete_data($row);
	$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('gudang');
	
}

public function ubahdata(){
	$id=$this->input->post('id_gdng');
	$data=array(
		'nm_gdng'=>$this->input->post('nm_gdng')
		);
	$this->Mgudang->update_data($data,$id);
	$this->session->set_flashdata('notif', '<div class="alert alert-info alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-info-circle"></i> Data berhasil diubah
								</div>');
redirect('gudang');

}
	
}
