<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:57:55
  from "X:\_work\dev\_nuclear\social\_nuclear\_admin\views\default\partials\linksuteis\new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e21813492b26_31309053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f72f386ad571b0bdfccae083b68905d8ebc8540' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\social\\_nuclear\\_admin\\views\\default\\partials\\linksuteis\\new.tpl',
      1 => 1457657873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e21813492b26_31309053 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
    <div class="panel-body">
		<div class="container-fluid">
		<h5>Lista de <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
 - Criar novo </h5>
		
		<link rel="stylesheet" href="<?php echo PUBLICPATH;?>
assets/css/summernote.css">
			<form action="<?php echo PUBLICPATH;?>
p/cms/<?php echo $_smarty_tpl->tpl_vars['ncontrol']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['naction']->value;?>
" method="post">	
			<div class="row"  >
		
	                    <div class="col-sm-9">
	                  
	                        <div class="form-group">
	                            <label for="title">
	                               <h5>Titulo</h5> </label>
	                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" />
	                        </div>
	                 
	                        <div class="form-group">
	                            <label for="descrit">
	                               <h5>Ligação</h5> </label>
	                                <input type="text" name="link" class="form-control" id="descrit" placeholder="http://"   />
	                        </div>
	                     
	                      
	                    </div>
	                    <div class="col-sm-3">
	                   </div>
	                    
	                    <div class="col-md-6">
	                        <button type="submit" class="btn btn-success " id="btnContactUs">
	                            Salvar</button>
	                    </div>
	                </div>
			</form>
		</div>
		</div>
	</div>
</section>

<?php if (isset($_smarty_tpl->tpl_vars['files_manager']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager']->value;?>

<?php }
}
}
