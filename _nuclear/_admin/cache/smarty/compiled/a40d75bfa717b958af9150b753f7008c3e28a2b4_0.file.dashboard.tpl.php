<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:30:30
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e21fb6f0dfd7_57280373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40d75bfa717b958af9150b753f7008c3e28a2b4' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/dashboard.tpl',
      1 => 1457656708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e21fb6f0dfd7_57280373 (Smarty_Internal_Template $_smarty_tpl) {
?>



	<div class="row">

		
		 <div class="col-md-12">
			<div class="row">
				
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-crosshairs fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge"><?php echo $_smarty_tpl->tpl_vars['track']->value['users'];?>
</div>
									<div>Total de Visitas</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-file-text-o fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge"><?php echo $_smarty_tpl->tpl_vars['track']->value['views'];?>
</div>
									<div>Páginas Visitadas</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa  fa-database fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge"><?php echo $_smarty_tpl->tpl_vars['track']->value['db'];?>
 MB</div>
									<div>Base de dados (de 25 MB Total)</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-hdd-o fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge"><?php echo $_smarty_tpl->tpl_vars['track']->value['disk'];?>
 MB</div><div>Espaço em disco (de 1000 MB Total)</div>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="clear: both"></div>
			
		</div>
	</div>

</div>

</section><?php }
}
