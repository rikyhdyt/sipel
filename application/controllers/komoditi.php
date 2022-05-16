<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	
	public function index()
	{
        $this->Msecurity->getsecurity();
        $isi['content']='komoditi/data_komoditi';
		$isi['sidebar']='sidebar/komoditi_aktif';
        $isi['data']=$this->db->get('tb_komoditi');
        $this->load->view('home',$isi);
    }
    
    public function tambahdata(){
		
		$data= array(
			'id_komoditi'=>$this->input->post('id_komoditi'),
			'nm_komoditi'=>$this->input->post('nm_komoditi'),
			'hrg_antar'=>$this->input->post('hrg_antar'),
            'hrg_str_lbh'=>$this->input->post('hrg_str_lbh'),
            'hrg_str_krg'=>$this->input->post('hrg_str_krg')
			
			);
		$this->Mkomoditi->add_data($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('komoditi');

	}
	public function hapusdata($row){
	$this->Mkomoditi->delete_data($row);
	$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('komoditi');
	
}

public function ubahdata(){
	$id=$this->input->post('id_komoditi');
	$data=array(
		'nm_komoditi'=>$this->input->post('nm_komoditi'),
		'hrg_antar'=>$this->input->post('hrg_antar'),
        'hrg_str_lbh'=>$this->input->post('hrg_str_lbh'),
        'hrg_str_krg'=>$this->input->post('hrg_str_krg')
		
		);
	$this->Mkomoditi->update_data($data,$id);
	$this->session->set_flashdata('notif', '<div class="alert alert-info alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-info-circle"></i> Data berhasil diubah
								</div>');
redirect('komoditi');

}
}
