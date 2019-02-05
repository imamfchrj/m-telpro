<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mastermenu_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'admin_menu';
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
    
    function get_main_menu(){
        $this->db->where('level', 1);
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

    function delete_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function get_master_menu($id_role){
        //  name,email,'.$this->table_admin_role_menu.".role as name_role"
        $this->db->select(
            $this->table.'.id,'.
            $this->table.'.name,'.
            $this->table.'.icon,'.
            $this->table.'.path'
        );
        $this->db->join($this->table_admin_role_menu, $this->table_admin_role_menu.'.menu='.$this->table.'.id');
        $this->db->where($this->table.'.level', 1);
        $this->db->where($this->table_admin_role_menu.'.role', $id_role);
        $this->db->order_by($this->table.'.id');
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
    }


    function get_sub_menu($id_role,$parent_id){
        $this->db->select(
            $this->table.'.id,'.
            $this->table.'.name,'.
            $this->table.'.icon,'.
            $this->table.'.path'
        );
        $this->db->join($this->table_admin_role_menu, $this->table_admin_role_menu.'.menu='.$this->table.'.id');
        $this->db->where($this->table.'.level', 2);
        $this->db->where($this->table_admin_role_menu.'.role', $id_role);
        $this->db->where($this->table.'.parent_id', $parent_id);
        $this->db->order_by($this->table.'.id');
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
    }

}