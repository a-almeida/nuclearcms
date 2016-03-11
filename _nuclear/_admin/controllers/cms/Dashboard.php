<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends NC_Core {


	public $partial='partials/dashboard';
	
	public function __construct()
	{
		parent::__construct();
		$this->_initcms();
	}
	
	public function index()
	{
		
		
		$disksize= get_dir_size(str_replace('_nuclear/','',FCPATH).'public_html/uploads/')+20000000;
		$data = array(
				'infoVALUE' => $disksize
		);
		$this->db->where('infoKEY', 'disksize');
		$this->db->update('info_site', $data);
		$this->data['track']['disk']=round($disksize/1000000, 2);
		$this->load->dbutil();
			$prefs = array(      
					'format'      => 'txt',            
					'add_drop'    => TRUE,           
					'add_insert'  => TRUE,              
					'newline'     => "\n"               
			);
			$backup =$this->dbutil->backup($prefs);
			$size=strlen($backup);
			$data = array(
					'infoVALUE' => $size
			);
			$this->db->where('infoKEY', 'dbsize');
			$this->db->update('info_site', $data);
		$this->data['track']['db']=round($size/1000000, 3);
		
		$this->db->where('infoKEY', 'totalusers');
		$anterior=$this->db->get('info_site')->row();
		$this->data['track']['users']=$anterior->infoVALUE;
		
		$this->db->where('infoKEY', 'totalviews');
		$anterior=$this->db->get('info_site')->row();
		$this->data['track']['views']=$anterior->infoVALUE;
		
		$this->load->library('plugin');
		$this->load->helper('directory');
		$this->data['morris']='[{"period":"2015-07-14","total":32,"totalusers":1,"totalindex":8},{"period":"2015-07-15","total":4,"totalusers":1,"totalindex":2},{"period":"2015-07-16","total":2,"totalusers":1,"totalindex":1},{"period":"2015-07-13","total":13,"totalusers":1,"totalindex":8},{"period":"2015-07-12","total":14,"totalusers":1,"totalindex":5},{"period":"2015-07-27","total":92,"totalusers":1,"totalindex":1},{"period":"2015-07-28","total":363,"totalusers":1,"totalindex":1},{"period":"2015-07-31","total":3,"totalusers":1,"totalindex":1},{"period":"2015-07-30","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-29","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-26","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-25","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-24","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-23","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-22","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-21","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-20","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-19","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-18","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-17","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-11","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-10","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-9","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-8","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-7","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-6","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-5","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-4","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-3","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-2","total":0,"totalusers":0,"totalindex":0},{"period":"2015-07-1","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-30","total":17,"totalusers":1,"totalindex":3},{"period":"2015-06-29","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-28","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-27","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-26","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-25","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-24","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-23","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-22","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-21","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-20","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-19","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-18","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-17","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-16","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-15","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-14","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-13","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-12","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-11","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-10","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-9","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-8","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-7","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-6","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-5","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-4","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-3","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-2","total":0,"totalusers":0,"totalindex":0},{"period":"2015-06-1","total":0,"totalusers":0,"totalindex":0}]';
		$this->_render($this->data['layout'],$this->data);
	}

	

}


