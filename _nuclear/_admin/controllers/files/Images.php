<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends NC_Core {

	public $partial='partials/files/list';
	function __construct()
	{
		parent::__construct();
		$this->_initcms();
	}

	public function index(){$this->_remap();}
	// redirect if needed, otherwise display the user list
	public function _remap()
	{
		if($_POST){$image_path=PRIVATEPATH.'public_html/uploads/';
				if(isset($_POST['dir']))
				{
					
					$this->load->model('files/files_model');
					$response = $this->files_model->retrive_dir($image_path);
				}
				else if(isset($_POST['new_dir']) && $_POST['new_dir']!='')
				{
					$new_dir = url_title($_POST['new_dir']);
					$dir_exist = $image_path.'xs/'.$_POST['actual_dir'];
					if(is_dir($dir_exist) && !is_dir($dir_exist.$new_dir))
					{
						mkdir($image_path.'xs/'.$_POST['actual_dir'].$new_dir, 0755 , true);
						mkdir($image_path.'sm/'.$_POST['actual_dir'].$new_dir, 0755 , true);
						mkdir($image_path.'lg/'.$_POST['actual_dir'].$new_dir, 0755 , true);
						mkdir($image_path.'md/'.$_POST['actual_dir'].$new_dir, 0755 , true);
					}
					redirect('/files/images');
				}
				else if(isset($_POST['images'])){
					$this->load->model('files/files_model');
					$response = $this->files_model->_retrive_images($image_path);
				}
				else if(isset($_POST['delete'])){
					if(unlink($image_path.'xs/'.$_POST['delete']) &&
					unlink($image_path.'sm/'.$_POST['delete']) && 
					unlink($image_path.'md/'.$_POST['delete']) &&
					unlink($image_path.'lg/'.$_POST['delete']) )
					echo 'apagado com sucesso';Exit();
				}}
		else{
		$this->data['active']='files';
			$this->load->library('plugin');
			$this->load->helper('directory');
			$this->data['table'] =$this->plugin->get_list($this);
			$this->_render($this->data['layout'],$this->data);
		}
		
	}
	
	
}
