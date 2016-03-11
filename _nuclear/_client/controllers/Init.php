<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends NUCLEAR_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	// redirect if needed, otherwise display the user list
	function index()
	{
		$this->_remap();
		
	}
	public function _remap()
	{
		
		if($this->uri->segment(0)=='')
		{
			
			$this->data['ncontrol'] = str_replace('/','',$this->uri->uri_string());
			
			if($this->data['ncontrol']=='home' || $this->data['ncontrol']=='')
			{
				if($this->data['ncontrol']=='')
				{
					$this->db->where('infoKEY', 'totalusers');
					$anterior=$this->db->get('info_site')->row();
					$n=$anterior->infoVALUE+1;
						
					$data = array(
							'infoVALUE' => $n
					);
					$this->db->where('infoKEY', 'totalusers');
					$this->db->update('info_site', $data);
				}
				$this->data['is_home']=TRUE;
				$this->_www();
				
			}
			else{	
				
				if($this->data['ncontrol']=='')
				{
					$this->db->where('infoKEY', 'totalusers');
					$anterior=$this->db->get('info_site')->row();
					$n=$anterior->infoVALUE+1;
				
					$data = array(
							'infoVALUE' => $n
					);
					$this->db->where('infoKEY', 'totalusers');
					$this->db->update('info_site', $data);
				}
				$this->_www();
				
			}
		}
		else{
			header("HTTP/1.0 404 Not Found");
			echo $this->load->view('error404');
		}
		
		
		
			
	}
	
	
	
	private function _www()
	{
		$this->load->model('config_model');
		$data['project']=$this->config_model->get_configs();
		
		$this->load->model('database/menus_model');		
		$data['navigation']=$this->menus_model->get_table(0);
		
		$this->load->model('database/pages_model');	
		$data['data']=$this->data;
		if($this->data['ncontrol']!='')
		{
			$data['content']=$this->pages_model->get_content($this->data['ncontrol']);
		}
		else
		{
			$data['content']=$this->pages_model->get_content('home');
			
		}
		
		if(!isset($this->data['is_home']))
		{
			
			$data['partial']=$this->load->view('partials/categorie',$data,TRUE);
			
		}
		else
		{
			$data['partial']=$this->load->view('partials/page',$data,TRUE);
		}
		
		if(count($data['content'])==0 || $data['content']==''){
		echo '<script>window.history.back();</script>';
		exit();
		}
		
		$data['navbar']=$this->load->view('common/navbar',$data,TRUE);	
		$data['head']=$this->load->view('common/head',$data,TRUE);	
		$data['footer']=$this->load->view('common/footer',$data,TRUE);
		$data['scripts']=$this->load->view('common/scripts',$data,TRUE);
		$this->load->view('index',$data);
	}
	
	
}