<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-09 22:07:10
  from "X:\_work\dev\_nuclear\v0.12\_nuclear\_admin\views\default\partials\pages\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e0907e655af7_34467942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e070b1bf98263c663bf32744161ac4e42fe31e' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\v0.12\\_nuclear\\_admin\\views\\default\\partials\\pages\\edit.tpl',
      1 => 1457478775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e0907e655af7_34467942 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo PUBLICPATH;?>
assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
    <div class="panel-body">
		<div class="container-fluid">
		<form action="<?php echo PUBLICPATH;?>
p/cms/pages/<?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['naction']->value;?>
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
                               <h5>Descrição Curta</h5> </label>
                                <input type="text" name="descrit" class="form-control" id="descrit" placeholder="Descrição curta" required="required" 
                                value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesSUBTITLE;?>
" />
                        </div>
                    </div>
                     <div class="col-md-5">
	                   <div class="form-group">
	                     		<img src="<?php echo PUBLICPATH;?>
uploads/sm/<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesIMG;?>
" width="100%"/>
	                            <label for="image"><h5>Imagem</h5></label>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="text" name="image" class="form-control" id="image" placeholder="Imagem" required="required" 
	                                value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesIMG;?>
" />
	                        </div>
                     </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="text">
                               <h5>Texto</h5> </label>
                            <textarea name="text" id="text" class="form-control summernote"  rows="9" cols="25" 
                                placeholder="Texto"><?php echo $_smarty_tpl->tpl_vars['content']->value->articlesTEXT;?>
</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success " id="btnContactUs">
                            Salvar</button>
                    </div>
                   
                </div>
             </form>
             <?php if (isset($_smarty_tpl->tpl_vars['user_admin']->value)) {?>
             
             <form action="<?php echo PUBLICPATH;?>
p/manager/page/delete/<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesSLUG;?>
" method="post" > <br/> 
		        <button  class="btn btn-danger btn-xs"  onclick="delete_item();"><i class="fa fa-remove"></i> Apagar</button> 
		        <input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesID;?>
"/>
		        </form>
             <?php }?>
		</div>
	</div>	
</section>

<?php if (isset($_smarty_tpl->tpl_vars['files_manager']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager']->value;?>

<?php }
}
}
