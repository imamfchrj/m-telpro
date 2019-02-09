<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mastercarseries_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'master_car_series';
    private $table_master_brand_car = 'master_brand_car';
    private $table_master_category_car = 'master_category_car';
    

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
        $this->db->select(
            $this->table.'.id,'.
            $this->table.'.name_series,'.
            $this->table.'.category_car_id,'.
            $this->table.'.brand_id,'.
            $this->table.'.is_manual,'.
            $this->table.'.seat,'.
            $this->table.'.is_airbags,'.
            $this->table.'.is_ac,'.
            $this->table_master_brand_car.'.name as "brand_name",'.
            $this->table_master_category_car.'.name as "category_name"'
        );
        $this->db->join($this->table_master_brand_car, $this->table_master_brand_car.'.id='.$this->table.'.brand_id',"left");
        $this->db->join($this->table_master_category_car, $this->table_master_category_car.'.id='.$this->table.'.category_car_id',"left");
        $this->db->where($this->table.'.id', $id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }
    
    function get_all(){
        $this->db->select(
            $this->table.'.id,'.
            $this->table.'.name_series,'.
            $this->table.'.category_car_id,'.
            $this->table.'.brand_id,'.
            $this->table.'.is_manual,'.
            $this->table.'.seat,'.
            $this->table.'.is_airbags,'.
            $this->table.'.is_ac,'.
            $this->table_master_brand_car.'.name as "brand_name",'.
            $this->table_master_category_car.'.name as "category_name"'
        );
        $this->db->join($this->table_master_brand_car, $this->table_master_brand_car.'.id='.$this->table.'.brand_id',"left");
        $this->db->join($this->table_master_category_car, $this->table_master_category_car.'.id='.$this->table.'.category_car_id',"left");
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

}