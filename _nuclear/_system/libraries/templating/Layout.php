<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Layout
{
	public $head     ='';
	public $header   ='';
	public $main ='';
	public $footer   ='';
	
	function render()
	{
		
		$layout['head']=$this->head;
		$layout['header']=$this->header;
		$layout['main']=$this->main;
		$layout['footer']=$this->footer;		
		return $layout;
		
	}
	
	function _start($css=array(),$js=array(),$nav=array())
	{
		$this->_head($css);
		$this->_header($nav);
		$this->_footer($js);
		return $this->render();
	}
	
	public function _head($css=array())
	{
		$output='<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>STARTigniter 0.1</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	';
		//$output.='<link rel="stylesheet" href="'.PUBLICPATH.'assets/css/boot.css">';
		foreach($css as $key=>$css)
		{
			$output.='<link rel="stylesheet" href="'.PUBLICPATH.'_static/css/'.$css.'">';   
		}
		$this->head = $output;
	}
	
	public function _footer($js=array())
	{
		$output='
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  			<script>window.jQuery || document.write(\'<script src="'.PUBLICPATH.'_static/js/vendor/jquery-1.11.2.min.js"><\/script>\');</script>';
		foreach($js as $key=>$js)
		{
		$output.='
			<script src="'.PUBLICPATH.'_static/js/'.$js.'"></script>
		';
		}
		$this->footer = $output;
	}
	
	
	public function _header($nav=array())
	{
		$output='';
		$output.='
		   <nav class="navbar navbar-default '.$nav['class'].' ">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="'.base_url().'">'.$nav['logotipo'].'</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">';
		 			$output.=$nav['navigation'];
		 			$output.='		         
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
		';
		$this->header = $output;
	}
}
		    		
		    		
		    		