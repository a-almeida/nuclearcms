<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:37:12
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/articles/new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e22148d8fb65_30720739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe2b58872481fadecf78751fc29c64c8ed6950ac' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/articles/new.tpl',
      1 => 1457657324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e22148d8fb65_30720739 (Smarty_Internal_Template $_smarty_tpl) {
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
			<div class="row" >
		
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
