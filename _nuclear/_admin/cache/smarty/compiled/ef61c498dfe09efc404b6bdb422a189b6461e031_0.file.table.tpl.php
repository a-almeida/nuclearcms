<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 18:25:22
  from "X:\_work\dev\_nuclear\social\_nuclear\_admin\views\default\partials\pages\table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e1ae02e893f2_88765896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef61c498dfe09efc404b6bdb422a189b6461e031' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\social\\_nuclear\\_admin\\views\\default\\partials\\pages\\table.tpl',
      1 => 1457037827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e1ae02e893f2_88765896 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
    <div class="panel-body">
		<div class="container-fluid">
		<a href="<?php echo PUBLICPATH;?>
p/cms/pages/create" class="btn btn-success">  <i class="fa fa-plus"></i> Novo</a>
		<table class="table">
		     <thead>
		      <tr>
		       <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['title'])) {?>
		       <td>Título</td>
		       <?php }?> 
		       <td>Endereço</td>
		       <td>ACTIONS</td>
		   	 </tr>
		   	 </thead>
		   	 <tbody  >		   	 
		   	<?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']) && isset($_smarty_tpl->tpl_vars['table']->value['type']) && $_smarty_tpl->tpl_vars['table']->value['type'] == 'articles') {?>
		     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['results'], 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
		      <tr>
		     <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['title'])) {?>
		       <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesNAME;?>
</td>
		       <?php }?> 
		        <td>
		        /<?php if ($_smarty_tpl->tpl_vars['foo']->value->articlesSLUG != 'home') {?>
		        <?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;
}?></td>
   				 <td>
		         <form action="<?php echo PUBLICPATH;?>
p/cms/pages/delete/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
" method="post">
		        <a href="<?php echo PUBLICPATH;?>
p/cms/pages/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		        <button  class="btn btn-danger" onclick="delete_item();"><i class="fa fa-remove"></i></button> 
		        <input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
"/>
		        </form>
		       </td>
		       </tr>
			<?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
				
			<?php }?>
		    </tbody>
		  </table>
		
		</div>
	</div>
</section>
<?php }
}
