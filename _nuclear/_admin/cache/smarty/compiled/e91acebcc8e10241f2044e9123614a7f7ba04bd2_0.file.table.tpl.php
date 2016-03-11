<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 01:24:39
  from "X:\_work\dev\_nuclear\v0.12\_nuclear\_admin\views\default\partials\features\table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e0bec773d230_55952699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91acebcc8e10241f2044e9123614a7f7ba04bd2' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\v0.12\\_nuclear\\_admin\\views\\default\\partials\\features\\table.tpl',
      1 => 1457569477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e0bec773d230_55952699 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
    <div class="panel-body">
		<div class="container-fluid">
		<table class="table">
		    <thead>
		      <tr><td></td>
		       <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['title'])) {?>
		       <td>Título</td>
		       <?php }?> 
		       <td>Endereço</td>
		       <td>ACTIONS</td>
		   	 </tr>
		   	 </thead>
		   	 <tbody  id="sortable">
		   	 
		   	<?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']) && isset($_smarty_tpl->tpl_vars['table']->value['type']) && ($_smarty_tpl->tpl_vars['table']->value['type'] == 'pages' || $_smarty_tpl->tpl_vars['table']->value['type'] == 'articles')) {?>
		     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['results'], 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
		      <tr id="sort<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesID;?>
">
		      <td>
		       <span class="fa fa-arrows pull-left orders" style="cursor:move" ></span>
		       </td>
		       <td><img src="<?php echo PUBLICPATH;?>
uploads/xs/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesIMG;?>
" height="50px"/></td>
		       <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesTITLE;?>
</td>
		        <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesLINK;?>
</td>
   				 <td>
		         <form action="<?php echo PUBLICPATH;?>
p/cms/features/delete/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
" method="post">
		        <a href="<?php echo PUBLICPATH;?>
p/cms/features/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
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
