<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:30:31
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/layouts/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e21fb706ea14_85129106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1259334e583c51a081681e799c4d40414758f86e' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/layouts/index.tpl',
      1 => 1457569888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/navbar.tpl' => 1,
    'file:common/asideleft.tpl' => 1,
  ),
),false)) {
function content_56e21fb706ea14_85129106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="PT">
<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body>
	<div class="overlay"></div>
	<?php $_smarty_tpl->_subTemplateRender("file:common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<aside class="left">
		<?php $_smarty_tpl->_subTemplateRender("file:common/asideleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
	</aside>	
	<section class="contents hideright">
		<header style="background:rgba(0,0,0,0.5);">
		<?php if (isset($_smarty_tpl->tpl_vars['breadcrumb']->value)) {?>
	   		<ol class="breadcrumb" style="margin-left: 50px;background:rgba(0,0,0,0);line-height:35px;" >
			     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_5_saved = $_smarty_tpl->tpl_vars['foo'];
?>
			      <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['foo']->value;?>
" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['fokey']->value;?>
</a></li>
			     <?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
			</ol>
		<?php }?>
  		</header>  		  
		<article class="container-fluid" id="conteudo">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</article>
	</section>
		
	<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['scripts']->value;?>

	</body>
</html><?php }
}
