<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_model {

	public function ambillogin($username,$password)
	{
		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0)
		{
			if ($query->num_rows()>0){
			foreach ($query->result() as $row){
                $sess = array ('username'=>$row->username, 'password'=>$row->password);
                $this->session->set_userdata($sess);
                redirect('home');
			}
				
			}
		}
		else
		 {
		 	$this->session->set_flashdata('notif', '<div class="alert alert-info alert-danger" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 <i class="fa fa-info-circle"></i> Username atau password salah !
		 </div>');
		redirect('login');
		}

		 }
	}