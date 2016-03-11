<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 01:33:43
  from "X:\_work\dev\_nuclear\v0.12\_nuclear\_admin\views\default\partials\files\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e0c0e793df93_61989653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b390f03943546dce832e47f074068d8a26a53b' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\v0.12\\_nuclear\\_admin\\views\\default\\partials\\files\\list.tpl',
      1 => 1457566150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e0c0e793df93_61989653 (Smarty_Internal_Template $_smarty_tpl) {
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
