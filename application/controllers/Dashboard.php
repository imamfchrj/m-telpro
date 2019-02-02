<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends All_Controller {
	
	public function index()
	{
		$data['menu']="home";
		$this->load->view('landing_page/main',$data);
	}


}
