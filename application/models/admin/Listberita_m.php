<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Listberita_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'news';
    private $table_master_news_category = 'master_news_category';
    

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
            $this->table.'.title,'.
            $this->table.'.thumbnail,'.
            $this->table.'.writer,'.
            $this->table.'.category_id,'.
            $this->table.'.tag,'.
            $this->table_master_news_category.'.category_name,'.
            $this->table.'.is_publish,'.
            $this->table.'.created_at,'.
            $this->table.'.news_text'
        );
        $this->db->join($this->table_master_news_category, $this->table_master_news_category.'.id='.$this->table.'.category_id',"left");
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
            $this->table.'.title,'.
            $this->table.'.thumbnail,'.
            $this->table.'.writer,'.
            $this->table.'.category_id,'.
            $this->table.'.tag,'.
            $this->table_master_news_category.'.category_name,'.
            $this->table.'.is_publish,'.
            $this->table.'.created_at,'.
            $this->table.'.news_text'
        );
        $this->db->join($this->table_master_news_category, $this->table_master_news_category.'.id='.$this->table.'.category_id',"left");
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