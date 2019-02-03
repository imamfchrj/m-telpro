<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function sewa()
	{
		$data['menu']="home";
		$this->load->view('admin/sewa',$data);
    }
	
	public function esales()
	{
		$data['menu']="home";
		$this->load->view('admin/calculator',$data);
    }
    
    


}
