<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends NC_Core {

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
			$menus = explode(',',$this->input->post('menus'));
			$this->load->model('database/menus_model');
			$result = $this->menus_model->update_sort($menus);
		}
		$this->partial='partials/menus/table';		
		$this->load->model('database/menus_model');
		$this->data['table'] =$this->menus_model->get_table('0');
		$this->_render($this->data['layout'],$this->data);
		
	}
	
	public function edit($param='')
	{
		if($_POST){
	
			$this->load->model('database/menus_model');
			$response= $this->menus_model->update($param,$this->input->post());
				redirect($this->data['uri_folders'].$this->data['nameClass']);
	
		}
		else
		{
			$this->filemanager();
			$this->partial='partials/menus/edit';
			$this->load->model('database/menus_model');
			$this->load->model('database/pages_model');
			$this->data['links'] = $this->pages_model->get_table();
			if($param!=''){$this->data['content'] = $this->menus_model->get_content($param);}
			else{redirect($this->data['uri_folders'].$this->data['nameClass']);}
			
			$this->_render($this->data['layout'],$this->data);
				
		}
	}
	
}
