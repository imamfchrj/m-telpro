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
            $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean|numeric|htmlentities');

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
            $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean|numeric|htmlentities');

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
            $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean|numeric|htmlentities');

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


	public function adminlist()
	{
		$data['menu']="adminlist";
		$this->load->model('admin/adminlist_m');
		$data['values']=$this->adminlist_m->get_all();
		$this->load->view('admin/adminlist',$data);
	}
	
	public function adminlist_add($id=0)
	{
		$data['menu']="adminlist";
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
				$this->load->model('admin/adminlist_m');
                $id=$this->form_validation->set_value('id');
				$data['values']=$this->adminlist_m->get_by_id($id);
            }
        }
		$this->load->model('admin/adminrole_m');
		$data['data_roles']=$this->adminrole_m->get_all();
		$this->load->view('admin/adminlist_add',$data);
	}

	public function listuser(){
		$data['menu']="listuser";
		// file:///Applications/XAMPP/xamppfiles/htdocs/admin/html/dark/app-contacts.html
	}

	public function listuser_add(){
		$data['menu']="listuser";
		// file:///Applications/XAMPP/xamppfiles/htdocs/admin/html/dark/app-contacts.html
	}

	public function listberita(){
		$data['menu']="listberita";
		$this->load->view('admin/listberita',$data);
	}

	public function listberita_add(){
		$data['menu']="listberita";
		$this->load->view('admin/listberita_add',$data);
	}


	public function upload_ck(){
		$data['menu']="listberita";
		$this->load->helper("costum_upload");
		$data=upload_image("upload");

		if($data->is_error){
			$data["uploaded"]=0;
			$data["fileName"]="";
			$data["url"]="";
			$data["error"]=array("message"=>$data->error);
			return "";
		}
		$data["uploaded"]=1;
		$data["fileName"]=$data["filename"];
		$data["url"]=base_url().UPLOAD_PATH.$data["filename"];
		echo json_encode($data);
		return;
	}

	public function kategoriberita(){
		$data['menu']="kategoriberita";
		$this->load->model('admin/kategoriberita_m');
		$data['values']=$this->kategoriberita_m->get_all();
		$this->load->view('admin/kategoriberita',$data);
	}

	public function kategoriberita_add($id=0){
		$data['menu']="kategoriberita";
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
				$this->load->model('admin/kategoriberita_m');
                $id=$this->form_validation->set_value('id');
				$data['values']=$this->kategoriberita_m->get_by_id($id);
            }
        }
		$this->load->view('admin/kategoriberita_add',$data);
	}

}
