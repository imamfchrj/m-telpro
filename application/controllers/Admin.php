<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Auth_Controller {
	
	function __construct()
	{
		parent::__construct();
		// if(hashuser($this->session->userdata('email'))!=$this->session->userdata('login_config')){
		// 	redirect('login');
		// }
	}
	
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
	


	
	
	public function mastermenu()
	{
		$data['menu']="mastermenu";
		$this->load->model('admin/mastermenu_m');
		$data['values']=$this->mastermenu_m->get_all();
		$this->load->view('admin/mastermenu',$data);
	}
	
	public function mastermenu_add($id=0)
	{
		$data['menu']="mastermenu";
		$this->load->model('admin/mastermenu_m');
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id probono', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
				$data['values']=$this->mastermenu_m->get_by_id($id);
            }
        }
		$data['main_menu']=$this->mastermenu_m->get_main_menu();
		$this->load->view('admin/mastermenu_add',$data);
	}
	
	public function adminrole()
	{
		$data['menu']="adminrole";
		$this->load->model('admin/adminrole_m');
		$data['values']=$this->adminrole_m->get_all();
		$this->load->view('admin/adminrole',$data);
	}
	
	public function adminrole_add($id=0)
	{
		$data['menu']="adminrole";
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id probono', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
				$this->load->model('admin/adminrole_m');
                $id=$this->form_validation->set_value('id');
				$data['values']=$this->adminrole_m->get_by_id($id);
            }
        }
		$this->load->view('admin/adminrole_add',$data);
	}
	
	public function adminrole_menu($id=0)
	{
		$data['menu']="adminrole";
		$this->load->model('admin/adminrole_m');
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id probono', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
				$data['values']=$this->adminrole_m->get_by_id($id);
			}
			if(!$id){
				redirect("admin/adminrole");
			}
        }
		$data['menu']=$this->adminrole_m->get_menu();
		$data['menu_user']=$this->adminrole_m->get_menu_user($id);
		$this->load->view('admin/adminrole_menu',$data);
	}
    
    


}
