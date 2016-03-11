<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 21:28:45
  from "X:\_work\dev\_nuclear\clean\_nuclear\_admin\views\default\partials\pages\table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e32a7d3a0977_06580926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0d9d884d1092bf68c222c5220b1b28e03e4c1c' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\clean\\_nuclear\\_admin\\views\\default\\partials\\pages\\table.tpl',
      1 => 1457728044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e32a7d3a0977_06580926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
    <div class="panel-body">
		<div class="container-fluid">
		<a href="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/cms/pages/create" class="btn btn-success">  <i class="fa fa-plus"></i> Novo</a>
		<table class="table">
		     <thead>
		      <tr>
		       <td>Título</td>
		       <td>Endereço</td>
		       <td>ACTIONS</td>
		   	 </tr>
		   	 </thead>
		   	 <tbody  >		   	 
		     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['results'], 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
		      <tr>
		       <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesNAME;?>
</td>
		        <td>
		        /<?php if ($_smarty_tpl->tpl_vars['foo']->value->articlesSLUG != 'home') {?>
		        <?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;
}?></td>
   				 <td>
		         <form action="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/cms/pages/delete/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
" method="post">
		        <a href="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/cms/pages/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		        <button  class="btn btn-danger" onclick="delete_item();"><i class="fa fa-remove"></i></button> 
		        <input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesID;?>
"/>
		        </form>
		       </td>
		       </tr>
			<?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
				
		    </tbody>
		  </table>
		
		</div>
	</div>
</section>
<?php }
}
