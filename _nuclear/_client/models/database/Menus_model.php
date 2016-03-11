<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menus_model extends CI_Model
{
	
	public function get_table($group)
	{
		$this->db->select('*');
		$this->db->where('menuGROUP',$group);	
		$query = $this->db->get('menus')->result();
		return $query;
	}
}