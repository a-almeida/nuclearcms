<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Config_model extends CI_Model
{
	
	public function get_configs()
	{
		$result=array();
		$this->db->select('*');
		$query = $this->db->get('info_site')->result();
		if(count($query)){
			foreach($query as $key=>$val)
			{
				$result[$val->infoKEY]=$val->infoVALUE;
			}
		}
		return $result;
	}
}