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
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }



	public function kategoriberita_insert(){
        cekmenu_ajax('kategoriberita');
        $this->load->model('admin/kategoriberita_m');
        $this->form_validation->set_rules('category_name', 'Nama Kategori', 'trim|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $value=array(
                'category_name' => $this->form_validation->set_value('category_name')
            );
            
            $data=$this->kategoriberita_m->set($value);
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
	
	public function kategoriberita_update(){
        cekmenu_ajax('kategoriberita');
        $this->load->model('admin/kategoriberita_m');
        $this->form_validation->set_rules('category_name', 'Nama Kategori', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'category_name' => $this->form_validation->set_value('category_name')
            );
            
            $data=$this->kategoriberita_m->update_value_by_id($id,$value);
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
    
	public function kategoriberita_delete(){
        cekmenu_ajax('kategoriberita');

        $this->load->model('admin/kategoriberita_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->kategoriberita_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }



	public function listberita_insert(){
        cekmenu_ajax('listberita');
        $this->load->model('admin/listberita_m');
        $this->form_validation->set_rules('title', 'Judul Artikel', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('writer', 'Penulis', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('category_id', 'Kategori', 'trim|integer|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('is_publish', 'Publish', 'trim|integer|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('tag', 'Tag', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('news_text', 'Text', 'trim|required|xss_clean|min_length[100]');
        if ($this->form_validation->run()) {

            $value=array(
                'title' => $this->form_validation->set_value('title'),
                'thumbnail' => $this->form_validation->set_value('thumbnail'),
                'writer' => $this->form_validation->set_value('writer'),
                'category_id' => $this->form_validation->set_value('category_id'),
                'is_publish' => $this->form_validation->set_value('is_publish'),
                'tag' => $this->form_validation->set_value('tag'),
                'news_text' => $this->form_validation->set_value('news_text'),
            );
            
            $data=$this->listberita_m->set($value);
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
	
	public function listberita_update(){
        cekmenu_ajax('listberita');
        $this->load->model('admin/listberita_m');
        $this->form_validation->set_rules('title', 'Judul Artikel', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('writer', 'Penulis', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('category_id', 'Kategori', 'trim|integer|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('is_publish', 'Publish', 'trim|integer|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('tag', 'Tag', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('news_text', 'Text', 'trim|required|xss_clean|min_length[100]');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'title' => $this->form_validation->set_value('title'),
                'thumbnail' => $this->form_validation->set_value('thumbnail'),
                'writer' => $this->form_validation->set_value('writer'),
                'category_id' => $this->form_validation->set_value('category_id'),
                'is_publish' => $this->form_validation->set_value('is_publish'),
                'tag' => $this->form_validation->set_value('tag'),
                'news_text' => $this->form_validation->set_value('news_text'),
            );
            
            $data=$this->listberita_m->update_value_by_id($id,$value);
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
    
	public function listberita_delete(){
        cekmenu_ajax('listberita');

        $this->load->model('admin/listberita_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->listberita_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }



	public function areaservice_insert(){
        cekmenu_ajax('areaservice');
        $this->load->model('admin/areaservice_m');
        $this->form_validation->set_rules('name', 'Nama Area', 'trim|required|xss_clean|htmlentities');

        $this->form_validation->set_rules('map_lat', 'Langitude', 'trim|required|xss_clean|htmlentities|callback__check_decimal');
        $this->form_validation->set_rules('map_long', 'Longitude', 'trim|required|xss_clean|htmlentities|callback__check_decimal');
        if ($this->form_validation->run()) {

            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'map_lat' => $this->form_validation->set_value('map_lat'),
                'map_long' => $this->form_validation->set_value('map_long'),
            );
            
            $data=$this->areaservice_m->set($value);
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
	
	public function areaservice_update(){
        cekmenu_ajax('areaservice');
        $this->load->model('admin/areaservice_m');
        $this->form_validation->set_rules('name', 'Nama Area', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('map_lat', 'Langitude', 'trim|required|xss_clean|htmlentities|callback__check_decimal');
        $this->form_validation->set_rules('map_long', 'Longitude', 'trim|required|xss_clean|htmlentities|callback__check_decimal');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'map_lat' => $this->form_validation->set_value('map_lat'),
                'map_long' => $this->form_validation->set_value('map_long'),
            );
            
            $data=$this->areaservice_m->update_value_by_id($id,$value);
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
    
	public function areaservice_delete(){
        cekmenu_ajax('areaservice');

        $this->load->model('admin/areaservice_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->areaservice_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
            ));
            return;
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  validation_errors()
        ));
        return;
    }


	public function mastercostumer_insert(){
        cekmenu_ajax('mastercostumer');
        $this->load->model('admin/mastercostumer_m');
        $this->form_validation->set_rules('name', 'Nama Perusahaan', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('image', 'Gambar Perusahaan', 'trim|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'image' => $this->form_validation->set_value('image')
            );
            
            $data=$this->mastercostumer_m->set($value);
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
	
	public function mastercostumer_update(){
        cekmenu_ajax('mastercostumer');
        $this->load->model('admin/mastercostumer_m');
        $this->form_validation->set_rules('name', 'Nama Perusahaan', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('image', 'Gambar Perusahaan', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $value=array(
                'name' => $this->form_validation->set_value('name'),
                'image' => $this->form_validation->set_value('image')
            );
            
            $data=$this->mastercostumer_m->update_value_by_id($id,$value);
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
    
	public function mastercostumer_delete(){
        cekmenu_ajax('mastercostumer');

        $this->load->model('admin/mastercostumer_m');
        $this->form_validation->set_rules('id', 'ID', 'trim|integer|required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            
            $data=$this->mastercostumer_m->delete_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
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
