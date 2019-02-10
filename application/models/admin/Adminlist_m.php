<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Adminlist_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'admin_user';
    private $table_admin_role = 'admin_role';

	function set($array){
        $array['password']=hashpass($array['password']);
        $this->db->set($array);
        $this->db->insert($this->table);
		return $this->db->insert_id();
    }
    
	function update_value_by_id($id,$value){
		$data = $value;
        $data['password']=hashpass($data['password']);
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
        $this->db->select($this->table.'.id,name,email,'.$this->table_admin_role.".role as name_role");
        $this->db->join($this->table_admin_role, $this->table_admin_role.'.id='.$this->table.'.role');
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

}