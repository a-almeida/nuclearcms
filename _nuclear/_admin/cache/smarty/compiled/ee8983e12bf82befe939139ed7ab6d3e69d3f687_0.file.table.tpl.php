<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:33:58
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/menus/table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e22086bb85e0_91526933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8983e12bf82befe939139ed7ab6d3e69d3f687' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/menus/table.tpl',
      1 => 1457571206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e22086bb85e0_91526933 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="panel panel-default">
    <div class="panel-body">
		<div class="container-fluid">
		<table class="table">
		    <thead>
		      <tr><td></td>
		       <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['title'])) {?>
		       <td>name</td>
		       <?php }?> 
		       <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['title'])) {?>
		       <td>link</td>
		       <?php }?> 
		       <td>ACTIONS</td>
		   	 </tr>
		   	 </thead>
		   	 
		   	 <tbody id="sortable">
		   	 
		   	<?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']) && isset($_smarty_tpl->tpl_vars['table']->value['type']) && $_smarty_tpl->tpl_vars['table']->value['type'] == 'articles') {?>
		     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['results'], 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
		      <tr id="sort<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuID;?>
">
		      <td>
		       <span class="fa fa-arrows pull-left orders" style="cursor:move"></span>
		       </td>
		     <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['title'])) {?>
		       <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->menuNAME;?>
</td>
		       <?php }?> 
		       <?php if (isset($_smarty_tpl->tpl_vars['table']->value['cols']['link'])) {?>
		        <td>/<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuLINK;?>
</td>
		       <?php }?> 
   				 <td>
		         <form action="<?php echo PUBLICPATH;?>
p/cms/menus/delete/<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuID;?>
" method="post">
		        <a href="<?php echo PUBLICPATH;?>
p/cms/menus/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuID;?>
" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		        <button  class="btn btn-danger" onclick="delete_item();"><i class="fa fa-remove"></i></button> 
		        <input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuID;?>
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
