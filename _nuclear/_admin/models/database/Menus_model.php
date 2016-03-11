<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menus_model extends CI_Model
{
	
	public function get_table($group)
	{
		
	
		$this->db->select('*');
		$this->db->where('menuGROUP',$group);
		$this->db->where('menuID !=','1');
		$this->db->order_by('menuORDER','ASC');
		$query2 = $this->db->get('menus')->result();	
		$table['results']=$query2;
		$table['cols']['title']='Nome';
		$table['cols']['link']='Destino';
		$table['type']='articles';
		
		return $table;
	}
	
	public function update($id,$post)
	{	
			$data['menuNAME']= $post['title'];
			$data['menuLINK']= $post['link'];
			$this->db->where('menuID', $id);
			$this->db->update('menus', $data);
		
	}
	
	
	public function update_sort($sorts)
	{
		foreach ($sorts as $key=>$menu)
		{
			$ID= str_replace('sort','',$menu);
			$data['menuORDER']= $key;
			$this->db->where('menuID', $ID);
			$this->db->update('menus', $data);
		}
	}
	
	public function get_content($group)
	{
	
	
		$this->db->select('*');
		$this->db->where('menuID',$group);
		$this->db->order_by('menuORDER','ASC');
		$query2 = $this->db->get('menus')->row();
		$table['results']=$query2;
		$table['cols']['title']='Nome';
		$table['cols']['link']='Destino';
		$table['type']='articles';
	
		return $table;
	}
}