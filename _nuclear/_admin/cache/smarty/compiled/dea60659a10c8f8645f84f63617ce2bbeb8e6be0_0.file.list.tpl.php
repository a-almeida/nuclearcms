<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 21:28:48
  from "X:\_work\dev\_nuclear\clean\_nuclear\_admin\views\default\partials\config\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e32a8017b684_59546902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea60659a10c8f8645f84f63617ce2bbeb8e6be0' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\clean\\_nuclear\\_admin\\views\\default\\partials\\config\\list.tpl',
      1 => 1457728121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e32a8017b684_59546902 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="panel panel-default">
	    <header class="panel-heading">CONFIGURATIONS </header>
	    <div class="panel-body" >
			<div class="container-fluid">
			<form action="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/project/<?php echo $_smarty_tpl->tpl_vars['ncontrol']->value;?>
/" method="post">		
	                <div class="row">
  
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'value', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['value']->value->infoKEY == 'logotipo') {?>
	<div class="col-sm-12">
	<div class="col-xs-2 text-right">
	  <label for="image"><h5>Logotipo</h5></label>
	</div>
	<div class="col-xs-3">
	
	 <div class="form-group">
	                     		
		<img src="<?php echo PUBLICPATH;?>
uploads/sm/<?php echo $_smarty_tpl->tpl_vars['value']->value->infoVALUE;?>
" width="100%"/>
	                           
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['value']->value->infoKEY;?>
" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value->infoKEY;?>
" readonly 
	                                value="<?php echo $_smarty_tpl->tpl_vars['value']->value->infoVALUE;?>
" />
	 </div>
	 </div>
	 </div>

	<?php } else { ?>
	<div class="col-sm-12">
	<div class="form-group">	 
	     <div class="col-sm-2 text-right">
	         <label for="title"><h5><?php echo $_smarty_tpl->tpl_vars['value']->value->infoKEY;?>
</h5> </label>
	     </div>
	     <div class="col-sm-10">
	     <input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value->infoKEY;?>
"  id="<?php echo $_smarty_tpl->tpl_vars['value']->value->infoKEY;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['value']->value->infoVALUE;?>
" />
	     </div>
	    
	</div>
	<div class="clear"></div>
	</div>
	<?php }?> 
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
<div class="col-xs-12">
<hr style="border:1px solid #ccc"/>
</div>

	                    <div class="col-xs-2"></div>
	                    <div class="col-md-6">
	                        <button type="submit" class="btn btn-success " id="btnContactUs">
	                            Salvar</button>
	                    </div>
	                </div>
	             </form>
			</div>
		</div>	
	</section>

	

		</div> 
	</div> 
</section>
<?php if (isset($_smarty_tpl->tpl_vars['files_manager']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager']->value;?>

<?php }?>

<?php }
}
