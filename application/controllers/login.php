<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function ceklogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('Mlogin');
		$this->Mlogin->ambillogin($username,$password);
	}
	public function logout(){
		$this->session->set_userdata('username',FALSE);
		$this->session->sess_destroy();
		redirect('login');
	}
}
