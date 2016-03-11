<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 21:28:47
  from "X:\_work\dev\_nuclear\clean\_nuclear\_admin\views\default\partials\menus\table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e32a7f1e3942_24685915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e9155974369067f9bfa3d95aaefe4c3329b2ba' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\clean\\_nuclear\\_admin\\views\\default\\partials\\menus\\table.tpl',
      1 => 1457728047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e32a7f1e3942_24685915 (Smarty_Internal_Template $_smarty_tpl) {
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
		         <form action="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/cms/menus/delete/<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuID;?>
" method="post">
		        <a href="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/cms/menus/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuID;?>
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
