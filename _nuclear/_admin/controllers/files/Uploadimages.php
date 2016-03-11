<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadimages extends NC_Core  {

	function __construct()
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
		
		$modu = PRIVATEPATH.'public_html/';
		// A list of permitted file extensions
		$allowed = array('png', 'jpg', 'gif');
		
		if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
		
			$directorypost = $_POST['directoria'];
			if($directorypost=='/'){$directorypost='';}
			$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
		
			if(!in_array(strtolower($extension), $allowed)){
				echo '{"status":"error"}';
				exit;
			}
		
			$file_ext= $this->rebuildurl($_FILES['upl']['name']);
			$file_name = url_title(str_replace($file_ext,'',$_FILES['upl']['name'])).'__DATE__'.time();
			$file= $modu.'uploads/_temp/'.$file_name.'.'.$file_ext;
			
			
			if(move_uploaded_file($_FILES['upl']['tmp_name'], $file)){
				
				
			
				
				$this->load->library('image_lib');
				$this->load->helper('url');
				
					$config['image_library'] = 'gd2';
					$config['source_image']	= $file;
					$config['create_thumb'] = FALSE;
					$config['overwrite'] = FALSE;
					
					$config['new_image'] = $modu.'uploads/xs/'.$directorypost.$file_name.'.'.$file_ext;
					$config['maintain_ratio'] = TRUE;
					$config['width']	= 150;
					$config['height']	= 300;
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
			
					$this->image_lib->clear();
			
					$config['image_library'] = 'gd2';
					$config['source_image']	= $file;
					$config['create_thumb'] = FALSE;
					$config['overwrite'] = FALSE;
					$config['new_image'] = $modu.'uploads/sm/'.$directorypost.$file_name.'.'.$file_ext;

					$config['maintain_ratio'] = TRUE;
					$config['width']	= 640;
					$config['height']	= 1280;
					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
				
					$this->image_lib->clear();

					$config['image_library'] = 'gd2';
					$config['source_image']	= $file;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['overwrite'] = FALSE;

					$config['quality'] = 50;
					$config['new_image'] = $modu.'uploads/md/'.$directorypost.$file_name.'.'.$file_ext;
					$config['width']	= 1280;
					$config['height']	= 2520;					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
			
					$this->image_lib->clear();
					$config['image_library'] = 'gd2';
					$config['source_image']	= $file;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['overwrite'] = FALSE;

					$config['quality'] = 30;
					$config['new_image'] = $modu.'uploads/lg/'.$directorypost.$file_name.'.'.$file_ext;
					$config['width']	= 1920;
					$config['height']	= 4000;					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
			
					unlink($file);
				
			$output='';
					$output .='<div class="col-sm-3 col-sx-6"><div style="padding:10px;margin-bottom:20px; border:1px solid #ccc"><img src="'.PUBLICPATH.'uploads/xs/'.$directorypost.$file_name.'.'.$file_ext.'" width="100%"';
					$output .=' onclick="selecionaimage(this)" ';
					$output .='/><a href="#apagaresta" class="btn btn-xs btn-danger"  onclick="removeimage(\''.$directorypost.$file_name.'.'.$file_ext.'\',this)"><i class="fa fa-remove"></i> Apagar</a></div></div>';					
				echo $output;
				
				exit;

				
			}
		}
		
		echo '{"status":"error"}';
		exit;
		
	}
	
	public function resize_image($sourcePath, $desPath, $width = '500', $height = '500')
	{
		$this->image_lib->clear();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $sourcePath;
		$config['new_image'] = $desPath;
		$config['quality'] = '100%';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = true;
		$config['thumb_marker'] = '';
		$config['width'] = $width;
		$config['height'] = $height;
		$this->image_lib->initialize($config);
	
		if ($this->image_lib->resize())
			return true;
			return false;
	}
	

	
	
	public function rebuildurl($url='')
	{
		$ext = pathinfo($url, PATHINFO_EXTENSION);
		return $ext;
		
	}
	
	
}