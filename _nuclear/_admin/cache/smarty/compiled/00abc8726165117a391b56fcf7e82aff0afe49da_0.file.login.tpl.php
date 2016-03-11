<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 17:24:56
  from "X:\_work\dev\_nuclear\social\_nuclear\_admin\views\default\partials\user\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e19fd8d3a723_88431103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00abc8726165117a391b56fcf7e82aff0afe49da' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\social\\_nuclear\\_admin\\views\\default\\partials\\user\\login.tpl',
      1 => 1456960080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e19fd8d3a723_88431103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('subheading', t('login_subheading'));
$_smarty_tpl->_assignInScope('heading', t('login_heading'));
$_smarty_tpl->_assignInScope('loginlab', t('login_identity_label'));
$_smarty_tpl->_assignInScope('passlab', t('login_password_label'));
$_smarty_tpl->_assignInScope('formopen', form_open("user/login"));
$_smarty_tpl->_assignInScope('forminput', form_input($_smarty_tpl->tpl_vars['identity']->value));
$_smarty_tpl->_assignInScope('forminput2', form_input($_smarty_tpl->tpl_vars['password']->value));
$_smarty_tpl->_assignInScope('formsubmit', form_submit('success',lang('login_submit_btn'),"class='btn btn-success' style='width:100%'"));
$_smarty_tpl->_assignInScope('formclose', form_close());
?>
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
			   <div class="panel-heading">
					<h1 style="font-weight:bold;border-bottom:1px solid #4d4d4d"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
					<p><?php echo $_smarty_tpl->tpl_vars['subheading']->value;?>
</p>
					</div>
					<div id="infoMessage ">
						<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
						<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
						<?php }?>
					</div>
				  	<div class="panel-body">
					<?php echo $_smarty_tpl->tpl_vars['formopen']->value;?>

					  <p>
					    <?php echo $_smarty_tpl->tpl_vars['loginlab']->value;?>

					  	<?php echo $_smarty_tpl->tpl_vars['forminput']->value;?>

					  </p>
					  <p>
					  	<?php echo $_smarty_tpl->tpl_vars['passlab']->value;?>

					  	<?php echo $_smarty_tpl->tpl_vars['forminput2']->value;?>

					  </p>
					  <p><?php echo $_smarty_tpl->tpl_vars['formsubmit']->value;?>
</p>
					<?php echo $_smarty_tpl->tpl_vars['formclose']->value;?>

				</div>
			</div>
		</div><?php }
}
