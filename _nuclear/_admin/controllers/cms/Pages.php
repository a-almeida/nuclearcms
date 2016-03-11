<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends NC_Core {


	public $partial='';
	
	public function __construct()
	{
		parent::__construct();
		$this->_initcms();
	}
	
	public function index()
	{
		$this->partial='partials/pages/table';		
		$this->load->model('database/pages_model');
		$this->data['table'] =$this->pages_model->get_table();
		if(count($this->data['table']['results'])==1)
		{
			redirect('cms/pages/edit/'.$this->data['table']['results'][0]->articlesSLUG);
		}
		$this->_render($this->data['layout'],$this->data);
	}
	
	public function delete($param='')
	{
		
		if($_POST){
			$this->db->where('articlesSLUG', $param);
			$this->db->where('articlesID', $this->input->post('delete'));
			$this->db->delete('pages');
			redirect($this->data['uri_folders'].$this->data['nameClass']);
				
	
		}
		else
		{
			redirect($this->data['uri_folders'].$this->data['nameClass']);
		}
	
	}
	
	public function create()
	{
		if($_POST){
	
			$this->load->model('database/pages_model');
			$response= $this->pages_model->create($this->input->post());
			if($response){
				redirect($this->data['uri_folders'].$this->data['nameClass']);
			}
	
		}
		else
		{
			$this->filemanager();
			$this->partial='partials/pages/new';
			$this->load->model('database/pages_model');
			$this->data['table'] =$this->pages_model->get_table();
			$this->_render($this->data['layout'],$this->data);
		}
	
	}
	public function edit($param='')
	{
		if($_POST){
				
			$this->load->model('database/pages_model');
			$response= $this->pages_model->upload($param,$this->input->post());
			if($response){
				redirect($this->data['uri_folders'].$this->data['nameClass']);
			}
		
		}
		else
		{
			$this->filemanager();
			$this->partial='partials/pages/edit';
			$this->load->model('database/pages_model');
			if($param!=''){$this->data['content'] = $this->pages_model->get_content($param);}
				else{redirect($this->data['uri_folders'].$this->data['nameClass']);}
			$this->_render($this->data['layout'],$this->data);
			
		}
	}
}

	
			