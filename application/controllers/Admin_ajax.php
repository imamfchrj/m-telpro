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
                'is_error'=>false,
                'id'=>$value
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
    
	// public function mastermenu_selectall(){
    //     echo json_encode(array(
    //         'is_error'=>false,
    //         'id'=>$data
    //     ));
    //     return;
    // }


    
    


}
