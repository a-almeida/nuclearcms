<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require SYSTEM."third_party/MX/Controller.php";
class NUCLEAR_Controller extends MX_Controller  
{	
	public $data=array();
	function __construct() {
		parent::__construct();		
		$this->__init();
	}
  
    private function __init()
    {
    	$this->data['theme_folder'] =  $this->config->item('FolderTemplate');
    	$this->data['modules_folder'] =  $this->config->item('modules_locations');
    	$this->data['nameClass']   =$this->router->fetch_class();
    	$this->data['storage']     = PUBLICPATH.'uploads';
    	$this->data['languages']   = $this->config->item('language');
    	$this->data['langkey']     = $this->config->item('language_abbr');
    	$this->data['langs']       = $this->config->item('lang_uri_abbr');
    	$this->data['root']        = PUBLICPATH;
    	$this->data['title']       = $this->config->item('title_project');
    	$this->data['ncontrol']    = $this->uri->segment(0);
    	$this->data['nmethod']     = $this->uri->segment(1);
    	$this->data['naction']     = $this->uri->segment(2);
    	$this->data['naction2']     = $this->uri->segment(3);
    	$this->data['cdn']         = PUBLICPATH.'assets/';
    	$this->data['uri']         = $this->uri->uri_string();
    	$this->data['baseurl']     =base_url();
    	$uris = explode('/',$this->data['uri']);
    	$a=0;
    	foreach ($uris as $key=>$val)
    	{
    		if($this->data['nameClass']==$val)
    		{
    			$a=1;
    		}
    		if($a==1)
    		{
    			unset($uris[$key]);
    		}
    	}
    	
    	$this->data['uri_folders']=implode('/',array_filter($uris)).'/';
    	
    	
    }
  
    public function _render()
    {
    	if(isset($this->partial)){
    		$this->data['layout']->content=$this->partial;
    	}
    	
    	$this->load->library(array('parser','parse'));
    	foreach($this->data['layout'] as $key=>$val)
    	{
    		$this->data[$key]=$this->parse->parse($val.".tpl", $this->data,TRUE);
    	}
    	$this->parse->parse("layouts/index.tpl", $this->data);
    }
    
    public function _themeconfig($sub='')
    {
    	
    	$this->load->helper('file');
    	$arr=array();
    	if ($xml=read_file(VIEWPATH.$this->data['theme_folder'].'/config.xml'))
    	{
    		 
    		$obj = new SimpleXMLElement($xml);
    		//$arr = json_decode(json_encode($obj), TRUE);
    		$arr = $obj->$sub;;
    	}
    	return $arr;
    }
    public function _pluginconfig($plug='')
    {
    	 
    	$this->load->helper('file');
    	$arr=array();
    	if ($xml=read_file(MODULESPATH.$plug.'/config.xml'))
    	{
    		 
    		$obj = new SimpleXMLElement($xml);
    		//$arr = json_decode(json_encode($obj), TRUE);
    		$arr = $obj->plugin;
    		
    		foreach($arr as $key=>$valu)
    		{
    			$lk=$this->data['langkey'];
    			$arr->name= $valu->label->$lk;
    		}
    	}
    	return $arr;
    }
    public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
    {
    
    	$this->viewdata = (empty($data)) ? $this->data: $data;
    	$view_html = $this->load->view('default/'.$view, $this->viewdata, $returnhtml);
    	if ($returnhtml) return $view_html;
    }
    
    public function filemanager($select=TRUE)
    {
    	$this->load->model('files/images_model');
    	
    	$this->data['image_manager'] = $this->load->view($this->data['theme_folder'].'/partials/files/list', $this->data,TRUE);
    	$this->data['files_manager'] = $this->load->view($this->data['theme_folder'].'/partials/filesmanager.php', $this->data, TRUE);
    
    }
    public function filemanager_docs($select=TRUE)
    {
    	$this->load->model('files/images_model');
    	 
    	$this->data['image_manager'] = $this->load->view($this->data['theme_folder'].'/partials/files/docs', $this->data,TRUE);
    	$this->data['files_manager_docs'] = $this->load->view($this->data['theme_folder'].'/partials/filesmanager.php', $this->data, TRUE);
    
    }
   
}