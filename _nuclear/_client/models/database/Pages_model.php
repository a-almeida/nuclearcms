<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pages_model extends CI_Model
{
	
	
	public function get_content($slug)
	{
		
		if($slug==''){$slug='home';}
		$this->db->select('*');
		$this->db->where('articlesSLUG',$slug);
		$query = $this->db->get('pages')->row();
		return $query;
	}
}