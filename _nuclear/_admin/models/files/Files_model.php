<?php
class Files_model extends CI_Model
{
	public $select = FALSE;
	function __construct ()
	{

		parent::__construct();
	}
	
	public function retrive_dirdoc($image_path)
	{
		unset($_POST['dir']);
		$directory= $this->_clean_uri(3,$this->uri->uri_string()).'/';
		
		$root =$image_path;
		$directory = urldecode($directory);
		if( file_exists($root . $directory) ) {
			$files = scandir($root . $directory);
			natcasesort($files);
			if( count($files) > 1 ) { /* The 2 accounts for . and .. */
				echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
		
				if(($directory=='' || $directory=='/') && $_POST['nr']!=0)
				{
				}
				else if($directory=='/' && $_POST['nr']!=0){
					// All dirs
		
					echo "<li class=\"directory \"><a href=\"#\" rel=\"/\">/</a></li>";
				}
				else{
					if($directory=='/'){
		
						echo "<li class=\"directory \"><a href=\"#\" rel=\"/\">/</a></li>";
					}
					
					foreach( $files as $file ) {
							
						if( file_exists($root . $directory . $file) && $file != '.' && $file != '..' && is_dir($root . $directory . $file) ) {
							echo "<li class=\"directory collapsed\"  >
									<a href='' class='pull-right fa fa-remove' style='color:#f04' onclick=\"removedir('".htmlentities($directory . $file)."',this)\"></a>
									<a href=\"#\" rel=\"" . htmlentities($directory . $file) . "/\" >" . htmlentities($file) . "
									
									</a>
									
									</li>";
						}
					}
		
		
				}
				echo "</ul>";
				Exit();
			}
		}
	}
	
	public function retrive_dir($image_path)
	{
	
		unset($_POST['dir']);
		$directory= $this->_clean_uri(3,$this->uri->uri_string()).'/';
		
		$root =$image_path.'sm/';
		$directory = urldecode($directory);
		if( file_exists($root . $directory) ) {
			$files = scandir($root . $directory);
			natcasesort($files);
			if( count($files) > 1 ) { /* The 2 accounts for . and .. */
				echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
				
				if(($directory=='' || $directory=='/') && $_POST['nr']!=0)
				{/*
				CREATE DIRECTORYS
				$this->load->library('ion_auth');
		if ($this->ion_auth->logged_in())
					echo "<form method='post' action='".PUBLICPATH."manager/files/' class='new_dira_form' >
									<input type='hidden'  name='actual_dir' value='".$directory."'/>
									<a href='#' onclick=\"$('.new_dira_form div').show()\"><i class='fa fa-plus-circle'></i> New directory</a>
									<div style='display:none'><input type='text'  name='new_dir' placeholder='directory_name' style='line-height:2;font-size:10px;width:100%'/><br/>
									<button type='button' onclick='this.form.submit()' class='btn btn-xs'>Create </button></div>
								 </form>";*/
				}
				else if($directory=='/' && $_POST['nr']!=0){
				// All dirs
				
				echo "<li class=\"directory \"><a href=\"#\" rel=\"/\">/</a></li>";
				}
				else{
						if($directory=='/'){

						echo "<li class=\"directory \"><a href=\"#\" rel=\"/\">/</a></li>";
						}
					echo "<form method='post' action='".PUBLICPATH."p/files/images/' class='new_dira_form' >
									<input type='hidden'  name='actual_dir' value='".$directory."'/>
									<a href='#' onclick=\"$('.new_dira_form div').show()\"><i class='fa fa-plus-circle'></i> New directory</a>
									<div style='display:none'><input type='text'  name='new_dir' placeholder='directory_name' style='line-height:2;font-size:10px;width:100%'/><br/>
									<button type='button' onclick='this.form.submit()' class='btn btn-xs'>Create </button></div>
								 </form>";
				foreach( $files as $file ) {
					
					if( file_exists($root . $directory . $file) && $file != '.' && $file != '..' && is_dir($root . $directory . $file) ) {
						echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($directory . $file) . "/\">" . htmlentities($file) . "</a></li>";
					}
				}
				
			/*	// All files
				foreach( $files as $file ) {
					if( file_exists($root . $directory . $file) && $file != '.' && $file != '..' && !is_dir($root . $directory . $file) ) {
						$ext = preg_replace('/^.*\./', '', $file);
						echo "<li class=\"file ext_$ext\"><a href=\"#\" rel=\"" . htmlentities($directory . $file) . "\">" . htmlentities($file) . "</a></li>";
					}
				}*/
				
				}
				echo "</ul>";
				Exit();
			}
		}
	}
	

	public function _retrive_docs($image_path)
	{
		unset($_POST['dir']);
		$directory= $this->_clean_uri(2,$this->uri->uri_string()).'/';
		$root =$image_path;
		$directory = urldecode($directory);
		$output='';
		if( file_exists($root . $directory) ) {
			$files = scandir($root . $directory);
			natcasesort($files);$n=0;
			if( count($files) > 2 ) { /* The 2 accounts for . and .. */
				foreach( $files as $file ) {
					if( file_exists($root . $directory . $file) && $file != '.' && $file != '..' && !is_dir($root . $directory . $file) ) {
						$n+=1;
						$ext = preg_replace('/^.*\./', '', $file);
						$file_view_name = str_replace('.'.$ext,'',$file);
						$file_view_name = explode('__',$file_view_name);
						
						
						if($directory=='/'){$directory='';}
						$output .='<div class="col-xs-6" ';
						if($n==4){$n=0;$output .=' style="clear:both" ' ;}
						$output .=' >
								<button  class="btn btn-xs btn-danger pull-right"  onclick="removeimage(\''.htmlentities($directory . $file).'\',this)"><i class="fa fa-remove"></i> </button>
							<div style="padding:3px;margin-bottom:10px;background:#fff;font-size:12px;text-align:left; border:1px solid #ccc"><b><i class="fa ';
							
						if($ext=='xls' || $ext=='xlsx')
						{
							$output .='fa-file-excel-o';
						}
						else if($ext=='doc' || $ext=='docx'){
							$output .='fa-file-word-o';
						}
						else if($ext=='pdf' ){
							$output .='fa-file-pdf-o';
						}
						else{
							$output .='fa-file';
						}
						
							
						$output .=' " style="font-size:35px"></i></b> <a target="_blank" href="'.PUBLICPATH.'uploads/docs/'.htmlentities($directory . $file).'"';
						$output .=' onclick="selecionadoc(this)" ';
						$output .='>'. str_replace('.'.$ext,'',$file).'</a>';
						
						$output .='</div></div><div style="clear:both"></div>';
	
					}
				}
			}
		}
		echo $output;
		Exit();
	}
	
	
	public function _retrive_images($image_path)
	{
		unset($_POST['dir']);
		$directory= $this->_clean_uri(2,$this->uri->uri_string()).'/';
		$root =$image_path.'sm/';
		$directory = urldecode($directory);
		$output='';
		if( file_exists($root . $directory) ) {
			$files = scandir($root . $directory);
			natcasesort($files);$n=0;
			if( count($files) > 2 ) { /* The 2 accounts for . and .. */
				foreach( $files as $file ) {
					if( file_exists($root . $directory . $file) && $file != '.' && $file != '..' && !is_dir($root . $directory . $file) ) {		
					$n+=1;
					$ext = preg_replace('/^.*\./', '', $file);
					$file_view_name = str_replace('.'.$ext,'',$file);
					$file_view_name = explode('__',$file_view_name);
					if($directory=='/'){$directory='';}
					$output .='<div class="col-sm-3 col-sx-6" ';
					if($n==4){$n=0;$output .=' style="clear:both" ' ;}
					$output .=' ><button  class="btn btn-xs btn-danger pull-right"  onclick="removeimage(\''.htmlentities($directory . $file).'\',this)"><i class="fa fa-remove"></i> </button>
							<div style="padding:10px;margin-bottom:20px;background:#fff;font-size:11px; border:1px solid #ccc"><b>'./*$file_view_name[0].*/'</b><img src="'.PUBLICPATH.'uploads/sm/'.htmlentities($directory . $file).'" width="100%"';
					$output .=' onclick="selecionaimage(this)" ';
					$output .='/></div></div>';	
				
					}
				}
			}
		}
		echo $output;
		Exit();
	}
	
	private function _clean_uri($min=0,$uri='')
	{
		$uri_array =explode('/',$uri);
		while($min >= 0) {
			unset($uri_array[$min]);
			$min--;
		}
		return implode('/',$uri_array);
	}
}
