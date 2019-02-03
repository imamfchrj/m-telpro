<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends All_Controller {
	
	public function index()
	{
		$data['menu']="home";
		$this->load->view('landing_page/main',$data);
	}


	public function kambing2()
	{
		$data['menu']="home";
		$this->load->view('landing_page/main',$data);
	}

	public function login(){
		$data['menu']="home";

		$this->load->view('users/login',$data);
	}

	public function register(){
		$data['menu']="home";

		$this->load->view('users/register',$data);
	}



	public function admin_login(){
		$data['menu']="home";

		$this->load->view('admin/login',$data);
	}


}
