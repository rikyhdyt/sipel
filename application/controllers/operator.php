<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='operator/data_operator';
		$isi['sidebar']='sidebar/operator_aktif';
		$isi['data']=$this->db->get('tb_operator');
		$this->load->view('home',$isi);
	}

	public function tambahdata(){
		
		$data= array(
			'id_op'=>$this->input->post('id_op'),
			'nm_op'=>$this->input->post('nm_op')
			);
		$this->Moperator->add_data($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('operator');

	}
	public function hapusdata($row){
	$this->Moperator->delete_data($row);
	$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('operator');
	
}

public function ubahdata(){
	$id=$this->input->post('id_op');
	$data=array(
		'nm_op'=>$this->input->post('nm_op')
		);
	$this->Moperator->update_data($data,$id);
	$this->session->set_flashdata('notif', '<div class="alert alert-info alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-info-circle"></i> Data berhasil diubah
								</div>');
redirect('operator');

}
}
