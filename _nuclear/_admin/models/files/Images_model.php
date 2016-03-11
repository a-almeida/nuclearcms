<?php
class Images_model extends CI_Model
{
	public $modux ='blog/';
	public $select = TRUE;
	function __construct ()
	{

		$this->load->helper('directory');
		parent::__construct();
	}
	
	public function getimages($dir='',$select=true)
	{
		$this->select= $select;
		if($dir!=''){$dir=$dir.'/';}
		$map = $this->findimages('uploads/xs/faces/'.$dir);
		return $map;
	
	}
	
	public function getfolder($dir='')
	{
		
		$map = $this->finddir('uploads/xs/'.$dir);
		return $map;
		
	}
	
	function findimages($path){
		
		
		$dir=directory_map($path);
		
		if(count($dir)==0){return 'pasta vazia';}
		$path = str_replace('uploads/',PUBLICPATH.'uploads/',$path);
		return $this->recursiveimages($dir,$path);
	}
	
	
	function finddir($path){
		
		$dir=directory_map($path);
		return $this->recursive($dir);
	}
	
	function recursive($dir,$parent='') {
		$output='';
		if(is_array($dir) && count($dir)>0)
		{
			foreach($dir as $key=>$val)
			{

				if (is_array($val) && count($val)>0){
					$output.= '<li data-rel="'.$parent.$key.'"   id="Mydira'.str_replace('/','',str_replace('\\','',$key)).'">
								<a href="#"  >								
								'.str_replace('\\','',$key).'
								</a><ul>';
					$output.=$this->recursive($val,$key);
					$output.= "</ul></li>";
				}
				else if(is_array($val))
				{
					$output .='<li  data-rel="'.$parent.$key.'" id="Mydira'.str_replace('/','',str_replace('\\','',$key)).'"><a href="#"  ><span class="glyphicon glyphicon-folder-open"></span>'.str_replace('\\','',$key).'</a></li>';
				}
			} 
		}
		return $output;
		
	}
	
	

	function recursiveimages($images,$path) {
		$output='';
		if(is_array($images))
		{
			foreach($images as $key=>$image)
			{
				if(is_array($image)){}	
				else{
				$output .='<div class="col-sm-3 col-sx-6">
						<div style="padding:10px;margin-bottom:20px; border:1px solid #ccc">
						<img src="'.$path.$image.'" width="100%"';
						if($this->select){$output .=' onclick="selecionaimage(this)" ';}
						
				$output .='/>
						<a href="#apagaresta" class="btn btn-xs btn-danger"  onclick="removeimage(\''.$image.'\',this)"><i class="fa fa-remove"></i> Apagar</a>
						</div></div>';
				}
			}
		}
		
		return $output;
	
	}
	
	
	function recursiveold($dir) {
		$output='';
		if(is_array($dir) && count($dir)>0)
		{
			foreach($dir as $key=>$val)
			{
	
				if (is_array($val) && count($val)>0){
					$output.= '<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-'.str_replace('\\','',$key).'">
								<span class="glyphicon glyphicon-folder-open"></span>
								'.str_replace('\\','',$key).'
								<span class="caret"></span>
										</a>';
					$output.= '<div id="dropdown-'.str_replace('\\','',$key).'" class="panel-collapse collapse">
							<div class="panel-body">
							<ul class="nav navbar-nav">';
					$output.=$this->recursive($val);
					$output.= "</ul></div></div></li>";
				}
				else if(is_array($val))
				{
					$output .='<li><a href="#"><span class="glyphicon glyphicon-folder-open"></span> '.str_replace('\\','',$key).'</a></li>';
				}
			}
		}
		return $output;
	
	}
	
}
