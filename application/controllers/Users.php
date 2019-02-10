<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function dashboard()
	{
		$data['menu']="home";
		$this->load->view('users/dashboard',$data);
	}


}
