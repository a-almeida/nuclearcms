<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Nuclear 
{
	public $data=array();
	function __construct()
	{
		$ci = & get_instance();
		$this->data['storage']     = ROOTPATH.'_storage/public';
		$this->data['languages']        = $ci->config->item('language');
		$this->data['langkey']     = $ci->config->item('language_abbr');
		$this->data['langs']       = $ci->config->item('lang_uri_abbr');
		$this->data['root']        = PUBLICPATH;
		$this->data['title']       = $ci->config->item('title_project');
		$this->data['module']      = $ci->uri->segment(0);
		$this->data['controller']  = $ci->uri->segment(1);
		$this->data['method']      = $ci->uri->segment(2);
		$this->data['action']      = $ci->uri->segment(3);
		$this->data['model']       = $ci->uri->segment(4);
		$this->data['what']        = $ci->uri->segment(5);
		$this->data['limit']       = $ci->uri->segment(6);
		$this->data['offset']      = $ci->uri->segment(7);
		
		foreach($this->data as $key=>$value)
		{
			$this->$key=$value;
		}
	
	}
	
	function data()
	{
		return $this->data;
	}
}