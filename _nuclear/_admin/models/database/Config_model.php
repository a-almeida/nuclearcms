<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Config_model extends CI_Model
{
	
	public function get_configs()
	{
		
		$this->db->select('*');
		$this->db->where('infoVIEW !=', 0);
		$query = $this->db->get('info_site');
		return $query->result();
	}
	public function upload($post)
	{
		
		foreach($post as $key=>$val)
		{
			if($key=='facebook')
			{
				$data = array(
						'infoVALUE' => $val
				);
				$this->db->where('infoKEY', $key);
				$this->db->update('info_site', $data);
			}
			else{
			$data = array(
				'infoVALUE' => $val
			);
			$this->db->where('infoKEY', $key);
			$this->db->update('info_site', $data);
			}
			
		}
		return TRUE;
	}
}