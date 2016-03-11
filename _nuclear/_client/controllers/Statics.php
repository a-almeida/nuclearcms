<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Statics extends NUCLEAR_Controller {

	function __construct()
	{
		
		parent::__construct();
		
	}

	// redirect if needed, otherwise display the user list
	function index()
	{
		$this->_remap();
		
	}
	public function _remap()
	{
		
		if($this->data['ncontrol']!=''){
			if($this->data['ncontrol']=='css' && $this->data['nmethod']=='theme.css'){
				$this->load->helper('file');
				header("Content-type: text/css; charset: UTF-8");
				$string = read_file(VIEWPATH.'_static/theme.css');
				echo $string;
			}
			else if($this->data['ncontrol']=='js' && $this->data['nmethod']=='theme.js'){
				$this->load->helper('file');
				header("Content-type: text/css; charset: UTF-8");
				$string = read_file(VIEWPATH.'_static/theme.js');
				echo $string;
			}
			else{
				header("HTTP/1.0 404 Not Found");
				echo $this->load->view('error404');
					
			}
		}
		else{
			header("HTTP/1.0 404 Not Found");
			echo $this->load->view('error404');
		}
		
		
			
	}
	
	
	
	
}