<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msecurity extends CI_model {

	public function getsecurity()
	{
		$username=$this->session->userdata('username');
		if (empty($username))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}