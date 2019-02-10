<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Adminrole_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'admin_role';
    private $table_admin_menu = 'admin_menu';
    private $table_admin_role_menu = 'admin_role_menu';

	function set($array){
        $this->db->set($array);
        $this->db->insert($this->table);
		return $this->db->insert_id();
    }
    
	function update_value_by_id($id,$value){
		$data = $value;
        $this->db->where('id', $id);
        $data = $this->db->update($this->table, $data); 
		return $data;
    }

    function get_by_id($id){
        $this->db->where('id', $id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }
    
    function get_all(){
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_menu(){
        $query=$this->db->get($this->table_admin_menu);
        if($query){
            return $query->result();
        }
        return false;
    }
    

    function delete_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function set_menu($data,$id){
        if($data['value']){
            $this->db->where('role', $id);
            $this->db->where('menu', $data['role']);
            $query=$this->db->get($this->table_admin_role_menu);
            if($query->row()){
                return FALSE;
            }
            $array = array(
                "role"=>$id,
                "menu"=>$data['role']
            );
            $this->db->set($array);
            $this->db->insert($this->table_admin_role_menu);
            return TRUE;
        }
        $this->db->where('role', $id);
        $this->db->where('menu', $data['role']);
        $this->db->delete($this->table_admin_role_menu);
        return TRUE;
    }

    function get_menu_user($id){

        $this->db->where('role', $id);
        $query=$this->db->get($this->table_admin_role_menu);
        $data = $query->result();
        $menu=array();
        foreach($data as $list){
            $menu[]=$list->menu;
        }
        return $menu;
    }

}