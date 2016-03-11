<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 03:04:52
  from "X:\_work\dev\_nuclear\demo\demo\_nuclear\_admin\views\default\partials\linksuteis\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e227c49b40c1_32578183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e67d1bd6ff55d8c1d3f5faf7a9beff0ad39a60b4' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\demo\\demo\\_nuclear\\_admin\\views\\default\\partials\\linksuteis\\edit.tpl',
      1 => 1457660422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e227c49b40c1_32578183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo PUBLICPATH;?>
assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
    <div class="panel-body">
		<div class="container-fluid">
		<form action="<?php echo PUBLICPATH;?>
p/cms/<?php echo $_smarty_tpl->tpl_vars['ncontrol']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['naction']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesSLUG;?>
" method="post">		
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="title">
                               <h5>Titulo</h5> </label> 
                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesTITLE;?>
" />
                        </div>
                     <div class="form-group">
	                            <label for="descrit">
	                               <h5>Ligação</h5> </label>
	                                <input type="text" name="link" class="form-control" id="descrit" placeholder="http://" value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesLINK;?>
"   />
	                        </div>
	                     
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success " id="btnContactUs">
                            Salvar</button>
                    </div>
                   
                </div>
             </form>
		</div>
	</div>	
</section>

<?php if (isset($_smarty_tpl->tpl_vars['files_manager']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager']->value;?>

<?php }
}
}
