<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends NC_Core {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{		
		$this->_remap();		
	}
	public function _remap()
	{
			if($this->data['ncontrol']!=''){	
				echo '<b>NUCLEAR::$'.$this->data['ncontrol'].'</b> <br/>
			  	error404: not found file $this->naction() ;';			
			}
			else{
				redirect('cms/dashboard');
			}
	}
}
