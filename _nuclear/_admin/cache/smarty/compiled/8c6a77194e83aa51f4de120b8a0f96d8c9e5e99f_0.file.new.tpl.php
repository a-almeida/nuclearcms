<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 01:30:19
  from "X:\_work\dev\_nuclear\v0.12\_nuclear\_admin\views\default\partials\linksuteis\new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e0c01b4533a4_82307563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6a77194e83aa51f4de120b8a0f96d8c9e5e99f' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\v0.12\\_nuclear\\_admin\\views\\default\\partials\\linksuteis\\new.tpl',
      1 => 1457569818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e0c01b4533a4_82307563 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
    <div class="panel-body">
		<div class="container-fluid">
		<h5>Lista de <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
 - Criar novo </h5>
		
			<form action="<?php echo PUBLICPATH;?>
p/cms/<?php echo $_smarty_tpl->tpl_vars['ncontrol']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['naction']->value;?>
" method="post">	
			<div class="row"  style="background:#eaeaea">
		
	                    <div class="col-sm-9">
	                  
	                        <div class="form-group">
	                            <label for="title">
	                               <h5>Titulo</h5> </label>
	                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" />
	                        </div>
	                 
	                        <div class="form-group">
	                            <label for="descrit">
	                               <h5>Descrição Curta</h5> </label>
	                                <input type="text" name="descrit" class="form-control" id="descrit" placeholder="Descrição curta"   />
	                        </div>
	                     
	                        <div class="form-group">
	                            <label for="link">
	                               <h5>Link/endereço</h5> </label>
	                                <input type="text" name="link" class="form-control" id="link" placeholder="http://"   />
	                        </div>
	                      
	                    </div>
	                    <div class="col-sm-3">
	                    
	                   <div class="form-group">
	                   			<img src="<?php echo PUBLICPATH;?>
uploads/sm/default.png" width="100%"/>
	                          
	                            <label for="image"><h5>Imagem</h5></label>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="hidden" name="image" class="form-control" id="image" placeholder="Imagem" value="default.png" readonly/>
	                        </div>
	                     
	                    </div>
	                    <div class="col-md-12">
	                   
	                        <div class="form-group">
	                            <label for="text">
	                               <h5>Texto</h5> </label>
	                            <textarea name="text" id="text" class="form-control summernote"  rows="9" cols="25" 
	                                placeholder="Texto"></textarea>
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
	</div>
</section>

<?php if (isset($_smarty_tpl->tpl_vars['files_manager']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager']->value;?>

<?php }
}
}
