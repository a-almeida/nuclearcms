<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 03:04:54
  from "X:\_work\dev\_nuclear\demo\demo\_nuclear\_admin\views\default\partials\files\docs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e227c6d01ec3_19235822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bdf7287efca4b85cd5da705b8341a368aae133' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\demo\\demo\\_nuclear\\_admin\\views\\default\\partials\\files\\docs.tpl',
      1 => 1457566446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e227c6d01ec3_19235822 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
	<header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
	<div class="panel-body" style="background:#eaeaea">
		 <div class="container-fluid">	
	       
	               <div class="col-sm-3">	<div  style="border:2px solid #fff;padding:10px;">
	               
				<div id="fileTreeDemo_1" class="demo"></div>
	                <form method="post" action="<?php echo PUBLICPATH;?>
p/files/docs/"  >
									<input type='hidden'  name='actual_dir' value=''/>
									<div ><input type='text'  name='new_dir' placeholder='directory_name' style='line-height:2;font-size:10px;width:100%'/><br/>
									<button type='button' onclick='this.form.submit()' class='btn btn-xs'>Create </button></div>
								 </form>
	               </div>
	               
	               </div>
	               <div class="col-sm-9" ><div  style="border:2px solid #fff;padding:10px;overflow:hidden;">
	               <h4><b>Directory </b></b><span id="directory"></span></h4>
				       <form id="upload" method="post" action="<?php echo PUBLICPATH;?>
p/files/uploaddocs/" enctype="multipart/form-data" class="col-sm-3">
				       <input type="hidden" name="directoria" value="" id="upload_dir">
				        <input type="hidden" value="<?php echo PUBLICPATH;?>
" id="public_dir">
				       <div id="drop">
								NOVA IMAGEM
								<a class="btn btn-default"><i class="fa fa-plus-circle"></i> Adicionar</a>
								<input type="file" name="upl" multiple />
								<p >Largue aqui<br/>(DRAG-DROP)</p>
							</div>
			 				<ul></ul>
						</form>
						<div style="clear:both">
						</div>
						<div id="images">
	                    </div>	           
	                    </div>
				  </div>
			 </div>		
		</div> 
	</div> 
</section>
<?php echo '<script'; ?>
>
function removeimage(str,esta)
{
	
		var r = confirm("Tem a certeza que deseja eliminar?");
	    if (r == true) {
	    $.post( "<?php echo PUBLICPATH;?>
p/files/docs/remove/"+str, { 'delete':  str  }, function( data ) {
				$(esta).parent().remove();
				 //alert(data);
				});
	       
	    } else { event.preventDefault();	 return false;
	       
	    }
		
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function removedir(str,esta)
{
	
		var r = confirm("Tem a certeza que deseja eliminar?");
	    if (r == true) {
	    $.post( "<?php echo PUBLICPATH;?>
p/files/docs/remove/"+str, { 'deletedir':  str  }, function( data ) {
				$(esta).parent().remove();
				location.reload();
				 //alert(data);
				});
	       
	    } else { event.preventDefault();	 return false;
	       
	    }
		
	}
<?php echo '</script'; ?>
><?php }
}
