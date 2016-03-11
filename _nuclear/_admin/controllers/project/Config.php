<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends NC_Core {

	public $partial='partials/config/list';
	
	function __construct()
	{
		parent::__construct();
		$this->_initcms();
	}

	// redirect if needed, otherwise display the user list
	public function index()
	{
			
		if($_POST)
		{
			$this->load->model('database/config_model');
			$response= $this->config_model->upload($this->input->post());
			
				redirect('/project/config/');
			
				
		}
		
		$this->load->library('plugin');
		$this->load->helper('directory');
		$this->filemanager();
		$this->load->model('database/config_model');
		$this->data['content'] =$this->config_model->get_configs();
		
		$this->_render($this->data['layout'],$this->data);
		
	}
	
	
}
