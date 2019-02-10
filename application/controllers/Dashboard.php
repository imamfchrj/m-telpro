<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends All_Controller {
	
	public function index()
	{
		$data['menu']="home";
		$this->load->view('landing_page/main',$data);
	}
	
	public function services()
	{
		$data['menu']="services";
		$this->load->view('landing_page/services',$data);
	}
	
	public function products()
	{
		$data['menu']="services";
		$this->load->view('landing_page/products',$data);
	}
	
	public function area()
	{
		$data['menu']="services";
		$this->load->view('landing_page/area',$data);
	}
	
	public function costumer()
	{
		$data['menu']="costumer";
		$this->load->view('landing_page/costumer',$data);
	}
	
	public function news()
	{
		$data['menu']="news";
		$this->load->view('landing_page/news',$data);
	}
	
	public function about_us()
	{
		$data['menu']="about_us";
		$this->load->view('landing_page/about_us',$data);
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

	public function default_form(){

		$data['menu']="home";
		$this->load->view('admin/form_default',$data);
	}


}
