<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 14:08:24
  from "X:\_work\dev\_nuclear\social\_nuclear\_admin\views\default\common\asideleft.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e171c8aed825_94208011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236b53057037752f3cbaf9be082a4665877b2728' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\social\\_nuclear\\_admin\\views\\default\\common\\asideleft.tpl',
      1 => 1457489077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e171c8aed825_94208011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<li class="list-group-item active">
     	<button class="btn btn-default btn-lg" onclick="toggleleft();"><i class="fa fa-remove"></i></button>
    	<div><i class="fa fa-bars"></i> Menu</div>
  	</li>
</header>
<section>
	<ul class="list-group">
 		<nav class="sidebar-nav">
			<ul class="metismenu" id="menu">
				<?php if (isset($_smarty_tpl->tpl_vars['sidebar']->value)) {?>
			        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar']->value->item, 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
				    <li>
				      	<a href="<?php if (!isset($_smarty_tpl->tpl_vars['foo']->value->childs)) {
echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['foo']->value->url;
}?>" class="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>active<?php }?>">
				      		<span class="<?php echo $_smarty_tpl->tpl_vars['foo']->value->icon;?>
"></span>
				      		<?php echo $_smarty_tpl->tpl_vars['foo']->value->label->{$_smarty_tpl->tpl_vars['langkey']->value};?>
      	
						   	<?php if (isset($_smarty_tpl->tpl_vars['foo']->value->childs)) {?>
						   	<span class="glyphicon arrow"></span></a>
						   	<ul aria-expanded="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>true<?php } else { ?>false<?php }?>" class="collapse <?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>in<?php }?>">
						   		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value->childs->item, 'foo2', false, 'fokey2');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey2']->value => $_smarty_tpl->tpl_vars['foo2']->value) {
$_smarty_tpl->tpl_vars['foo2']->_loop = true;
$__foreach_foo2_1_saved = $_smarty_tpl->tpl_vars['foo2'];
?>
						      		<li class="<?php if ((($_smarty_tpl->tpl_vars['active']->value).('/')).($_smarty_tpl->tpl_vars['ncontrol']->value) == $_smarty_tpl->tpl_vars['foo2']->value->url) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['foo2']->value->url;?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['foo2']->value->icon;?>
"></span> <?php echo $_smarty_tpl->tpl_vars['foo2']->value->label->{$_smarty_tpl->tpl_vars['langkey']->value};?>
</a></li>
						       	<?php
$_smarty_tpl->tpl_vars['foo2'] = $__foreach_foo2_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
						    </ul>
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['foo']->value->module) && $_smarty_tpl->tpl_vars['foo']->value->module == 'articles') {?>
								<?php if (isset($_smarty_tpl->tpl_vars['articlesgroup']->value)) {?>
							   	<span class="glyphicon arrow"></span></a>
							   	<ul aria-expanded="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>true<?php } else { ?>false<?php }?>" class="collapse <?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>in<?php }?>">
							   		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articlesgroup']->value, 'foo2', false, 'fokey2');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey2']->value => $_smarty_tpl->tpl_vars['foo2']->value) {
$_smarty_tpl->tpl_vars['foo2']->_loop = true;
$__foreach_foo2_2_saved = $_smarty_tpl->tpl_vars['foo2'];
?>
							      		<li class="<?php if ($_smarty_tpl->tpl_vars['naction']->value == $_smarty_tpl->tpl_vars['foo2']->value->groupsSLUG) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
cms/articles/group/<?php echo $_smarty_tpl->tpl_vars['foo2']->value->groupsSLUG;?>
"  style="text-transform:uppercase"><span class="<?php echo $_smarty_tpl->tpl_vars['foo2']->value->groupsICON;?>
"></span> <?php echo $_smarty_tpl->tpl_vars['foo2']->value->groupsNAME;?>
</a></li>
							       	<?php
$_smarty_tpl->tpl_vars['foo2'] = $__foreach_foo2_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
							    </ul>
								<?php }?>
							<?php }?>
					 	 </a>					   					   		
			   		</li>	
			     	<?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		      	 <?php }?>	
		      	 <?php if (isset($_smarty_tpl->tpl_vars['restrict']->value)) {?>
			        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['restrict']->value->item, 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_3_saved = $_smarty_tpl->tpl_vars['foo'];
?>
				    <li>
				      	<a href="<?php if (!isset($_smarty_tpl->tpl_vars['foo']->value->childs)) {
echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['foo']->value->url;
}?>" class="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>active<?php }?>">
				      		<span class="<?php echo $_smarty_tpl->tpl_vars['foo']->value->icon;?>
"></span>
				      		<?php echo $_smarty_tpl->tpl_vars['foo']->value->label->{$_smarty_tpl->tpl_vars['langkey']->value};?>
		      	
						   	<?php if (isset($_smarty_tpl->tpl_vars['foo']->value->childs)) {?>
						   	<span class="glyphicon arrow"></span></a>
						   	<ul aria-expanded="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>true<?php } else { ?>false<?php }?>" class="collapse <?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['foo']->value->url) {?>in<?php }?>">
						   		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value->childs->item, 'foo2', false, 'fokey2');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey2']->value => $_smarty_tpl->tpl_vars['foo2']->value) {
$_smarty_tpl->tpl_vars['foo2']->_loop = true;
$__foreach_foo2_4_saved = $_smarty_tpl->tpl_vars['foo2'];
?>
						      		<li class="<?php if ((($_smarty_tpl->tpl_vars['active']->value).('/')).($_smarty_tpl->tpl_vars['nmethod']->value) == $_smarty_tpl->tpl_vars['foo2']->value->url) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['foo2']->value->url;?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['foo2']->value->icon;?>
"></span> <?php echo $_smarty_tpl->tpl_vars['foo2']->value->label->{$_smarty_tpl->tpl_vars['langkey']->value};
echo $_smarty_tpl->tpl_vars['base_url']->value;?>
</a></li>
						       	<?php
$_smarty_tpl->tpl_vars['foo2'] = $__foreach_foo2_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
						    </ul>
							<?php }?>
					 	 </a>					   					   		
			   		</li>	
			     	<?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		      	 <?php }?>	
		      	 
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/login/logout" class="bg1">Logout</a></li>
			</ul>
		</nav>
	</ul>
</section>
<?php }
}
