<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NC_core extends NUCLEAR_Controller
{
	
	function __construct ()
    {
        parent::__construct();
        
        
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		$user = $this->session->userdata();
		if(!isset($user['user_id']) && !$this->ion_auth->logged_in()){
			redirect('users/login');
		}
		else{
			$this->data['user_admin'] =FALSE;
			$this->user=$user;
			$this->data['logged']      = TRUE;
			if($this->ion_auth->is_admin())
			{
				$this->data['user_admin']=TRUE;
			}
		}
		
	}
	
	public function _initcms()
	{
		$this->lang->load('theme');
		$this->load->model('layout_model');
		$this->load->model('database/pages_model');
		$this->data['breadcrumb']=array('Home'=>'',$this->data['nameClass'] => base_url().$this->data['uri_folders'].$this->data['nameClass']);
	
		if(count($this->data['uri_folders'])==1 && $this->data['uri_folders']=='/')
		{
			$this->data['active']=$this->data['nameClass'];
			
		}else
		{
			$this->data['active']=$this->data['uri_folders'].$this->data['nameClass'];
		}
		
		$this->data['sidebar'] = $this->_themeconfig('sidebar');
		
		
		if($this->ion_auth->is_admin())
		{
		$this->data['restrict'] = $this->_themeconfig('restrict');
		}
		$this->data['layout'] =$this->layout_model->common();
		
		
	}
	
    
}