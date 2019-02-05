<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ajax extends Auth_Controller {
	
	function __construct()
	{
		parent::__construct();
		// if(hashuser($this->session->userdata('email'))!=$this->session->userdata('login_config')){
		// 	redirect('login');
		// }
	}
	
	public function mastermenu_insert(){
        cekmenu_ajax('mastermenu');
        $this->load->model('admin/mastermenu_m');
        $this->form_validation->set_rules('name', 'Nama Menu', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|xss_clean|htmlentities');
        $this->form_validation->set_rules('path', 'Path', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('level', 'Level', 'trim|required|integer|xss_clean|htmlentities');
        $this->form_validation->set_rules('parent', 'Parent', 'trim|integer|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'icon' => $this->form_validation->set_value('icon'),
                'path' => $this->form_validation->set_value('path'),
                'level' => $this->form_validation->set_value('level'),
                'parent_id' => $this->form_validation->set_value('parent')
            );
            
            $data=$this->mastermenu_m->set($value);
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }
	
	public function mastermenu_update(){
        cekmenu_ajax('mastermenu');
        $this->load->model('admin/mastermenu_m');
        $this->form_validation->set_rules('name', 'Nama Menu', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|xss_clean|htmlentities');
        $this->form_validation->set_rules('path', 'Path', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('level', 'Level', 'trim|required|integer|xss_clean|htmlentities');
        $this->form_validation->set_rules('parent', 'Parent', 'trim|integer|xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'icon' => $this->form_validation->set_value('icon'),
                'path' => $this->form_validation->set_value('path'),
                'level' => $this->form_validation->set_value('level'),
                'parent_id' => $this->form_validation->set_value('parent')
            );
            
            $data=$this->mastermenu_m->update_value_by_id($id,$value);
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }
    
	public function mastermenu_delete(){
        cekmenu_ajax('mastermenu');

        $this->load->model('admin/mastermenu_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->mastermenu_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }


    public function adminrole_insert(){

        cekmenu_ajax('adminrole');

        $this->load->model('admin/adminrole_m');
        $this->form_validation->set_rules('role', 'Role Name', 'trim|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $value=array(
                'role' => $this->form_validation->set_value('role')
            );
            
            $data=$this->adminrole_m->set($value);
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }
    

    public function adminrole_update(){

        cekmenu_ajax('adminrole');

        $this->load->model('admin/adminrole_m');
        $this->form_validation->set_rules('role', 'Role Name', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'role' => $this->form_validation->set_value('role')
            );
            
            $data=$this->adminrole_m->update_value_by_id($id,$value);
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }

    public function adminrole_delete(){

        cekmenu_ajax('adminrole');

        $this->load->model('admin/adminrole_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->adminrole_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }


    public function adminrole_menu(){

        cekmenu_ajax('adminrole');

        $this->load->model('admin/adminrole_m');
        $this->form_validation->set_rules('idmenu', 'Value', 'trim|integer|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('value', 'Value', 'trim|integer|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'User Admin', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $value=array(
                'role' => $this->form_validation->set_value('idmenu'),
                'value' => $this->form_validation->set_value('value')
            );
            $id=$this->form_validation->set_value('id');
            $data=$this->adminrole_m->set_menu($value,$id);
            if($data){
                echo json_encode(array(
                    'is_error'=>false
                ));
                return;
            }
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  "Terjadi kesalahan. Mohon refresh komputer anda."
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }


    public function adminlist_insert(){
        cekmenu_ajax('adminlist');
        $this->load->model('admin/adminlist_m');
        $this->form_validation->set_rules('name', 'Nama User Admin', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|htmlentities|callback__check_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|htmlentities|min_length[8]|max_length[200]');
        $this->form_validation->set_rules('role', 'Role Admin', 'trim|required|integer|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'email' => $this->form_validation->set_value('email'),
                'password' => $this->form_validation->set_value('password'),
                'role' => $this->form_validation->set_value('role'),
            );
            
            $data=$this->adminlist_m->set($value);
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }
	
	public function adminlist_update(){
        cekmenu_ajax('adminlist');
        $this->load->model('admin/adminlist_m');
        $this->form_validation->set_rules('name', 'Nama User Admin', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|htmlentities|min_length[8]|max_length[200]');
        $this->form_validation->set_rules('role', 'Role Admin', 'trim|required|integer|xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'email' => $this->form_validation->set_value('email'),
                'password' => $this->form_validation->set_value('password'),
                'role' => $this->form_validation->set_value('role'),
            );
            
            $data=$this->adminlist_m->update_value_by_id($id,$value);
            echo json_encode(array(
                'is_error'=>true,

            'error_message'=>  json_encode($id)
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }
    
	public function adminlist_delete(){
        cekmenu_ajax('adminlist');

        $this->load->model('admin/adminlist_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->adminlist_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }

}
