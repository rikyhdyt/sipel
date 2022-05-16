<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='dashboard';
		$isi['sidebar']='sidebar/home_aktif';
		$isi['totalkmdt']= $this->Mdashboard->jmlh_komoditi();
		$this->load->view('home',$isi);
	}
}
