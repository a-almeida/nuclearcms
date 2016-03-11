<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:34:44
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/files/list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e220b460b7a8_42202560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66e01d560e408e62d27a30bc9ac82016b57fea46' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/files/list.tpl',
      1 => 1457566152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e220b460b7a8_42202560 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
	<header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
	<div class="panel-body" style="background:#eaeaea">
		 <div class="container-fluid">	
	          <div class="row">
	               <div class="col-sm-3">	<div  style="border:2px solid #fff;padding:10px;">
				<div id="fileTreeDemo_1" class="demo"></div>
	               </div></div>
	               <div class="col-sm-9" ><div  style="border:2px solid #fff;padding:10px;overflow:hidden;">
	               <h4><b>Directory </b></b><span id="directory"></span></h4>
				       <form id="upload" method="post" action="<?php echo PUBLICPATH;?>
p/files/uploadimages/" enctype="multipart/form-data" class="col-sm-3">
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
p/files/images/remove/"+str, { 'delete':  str  }, function( data ) {
				$(esta).parent().remove();
				 //alert(data);
				});
	       
	    } else { event.preventDefault();	 return false;
	       
	    }
		
	}
<?php echo '</script'; ?>
><?php }
}
