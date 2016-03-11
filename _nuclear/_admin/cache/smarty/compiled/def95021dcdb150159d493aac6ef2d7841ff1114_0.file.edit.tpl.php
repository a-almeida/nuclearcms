<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 15:10:45
  from "X:\_work\dev\_nuclear\demo\demo_cspcs\_nuclear\_admin\views\default\partials\articles\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e2d1e5d03686_48487322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def95021dcdb150159d493aac6ef2d7841ff1114' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\demo\\demo_cspcs\\_nuclear\\_admin\\views\\default\\partials\\articles\\edit.tpl',
      1 => 1457705440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2d1e5d03686_48487322 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo PUBLICPATH;?>
assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['naction2']->value;?>
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
                   
                     <?php if (isset($_smarty_tpl->tpl_vars['is_docs']->value)) {?>
                      <button type="submit" class="btn btn-success " id="btnContactUs">
                            Salvar</button><div style="clear:both"><hr></div>
                       <div class="col-md-8">
		     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['results'], 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
		     
		     <div class="panel panel-default" style="background:#ccc">
    <div class="panel-body">
  <div class="col-sm-2">
				<b style="line-height:50px">Nome do documento:</b>
		         </div>
		        <div class="col-sm-5">
				<input type="hidden" name="docs[id][]" class="form-control" id="image" placeholder="Sem ficheiro anexo" required="required" 
	                                value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesID;?>
" />	                                
		        <input type="text" name="docs[name][]" class="form-control" style="background:#fff; margin:6px" id="image" placeholder="Sem ficheiro anexo" required="required" 
	                                value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesNAME;?>
" />
		         </div>
		        <div class="col-sm-5" style="line-height:50px">
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Anexo</button>
								<input type="text" name="docs[link][]" placeholder="Sem ficheiro anexo" required="required" readonly
	                                value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesLINK;?>
" style="font-size:10px;min-width:250px;line-height:20px" />
	                  </div>
		    </div></div>
		   
		     <?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		      <div id="newdocs">
		    
		    </div>
		  
		      <button  class="btn btn-default " id="btnContactUs" onclick="new_doc()">
                            <i class="fa fa-plus"></i> Adicionar Novo</button>
                       </div>
                     <?php } else { ?>
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
                         <div class="form-group">
                            <label for="text">
                               <h5>Texto</h5> </label>
                            <textarea name="text" id="text" class="form-control summernote"  rows="9" cols="25" 
                                placeholder="Texto"><?php echo $_smarty_tpl->tpl_vars['content']->value->articlesTEXT;?>
</textarea>
                        </div>
                         </div>
                     <div class="col-md-5">
	                   <div class="form-group">
	                     		<img src="<?php echo PUBLICPATH;?>
uploads/sm/<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesIMG;?>
" width="100%"/>
	                            <label for="image"><h5>Imagem</h5></label>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="text" name="galeria[]" class="form-control" id="image" placeholder="Imagem" required="required" 
	                                value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesIMG;?>
" />
	                        </div>
	                   <?php if (isset($_smarty_tpl->tpl_vars['have_gal']->value)) {?><h4>Galeria de imagens</h4> <button  class="btn btn-default " id="btnContactUs" onclick="new_img()">
                           <i class="fa fa-plus"></i> Adicionar Novo</button>
                       <div style="clear:both"><hr></div>
                       
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->galery, 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_1_saved = $_smarty_tpl->tpl_vars['foo'];
?>
	                       <div class="col-xs-3">
                   			<div class="form-group">
                   			<a href='' class='pull-right fa fa-remove' style='color:#f04' onclick="remova(this)"></a>
									
	                     		<img src="<?php echo PUBLICPATH;?>
uploads/sm/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" width="100%"/>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="text" name="galeria[]" class="form-control" id="image" placeholder="Imagem" required="required" 
	                                value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
	                        </div>
	                        </div>
	                        <?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	                          <div id="newimgs">
	                          
	                          </div>
                 
                   <?php }?>
                     </div>
                       <div class="col-md-6">
                        <button type="submit" class="btn btn-success " id="btnContactUs">
                            Salvar</button>
                    </div>
                     <?php }?>
                 
                </div>
             </form>
		</div>
	</div>	
</section>
<div id="newimg" style="display:none">
  <div class="col-xs-3">
                   			<div class="form-group">
	                     		<img src="<?php echo PUBLICPATH;?>
uploads/sm/default.png" width="100%"/>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="text" name="galeria[]" class="form-control" id="image" placeholder="Imagem" required="required" 
	                                value="default.jpg" />
	                        </div>
	                        </div>
</div>

<div id="newdoc" style="display:none">
<div class="panel panel-default" style="background:#ccc">
    <div class="panel-body">
  <div class="col-sm-2">
				<b style="line-height:50px">Nome do documento:</b>
		         </div>
		        <div class="col-sm-5">
				<input type="hidden" name="docs[id][]" class="form-control" id="image" placeholder="Sem ficheiro anexo" required="required" 
	                                value="" />	                                
		        <input type="text" name="docs[name][]" class="form-control" style="background:#fff; margin:6px" id="image" placeholder="Sem ficheiro anexo" required="required" 
	                                value="" />
		         </div>
		        <div class="col-sm-5" style="line-height:50px">
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Anexo</button>
								<input type="text" name="docs[link][]" placeholder="Sem ficheiro anexo" required="required" readonly
	                                value="" style="font-size:10px;min-width:250px;line-height:20px" />
	                  </div>
		    </div></div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['files_manager']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['files_manager_docs']->value)) {
echo $_smarty_tpl->tpl_vars['files_manager_docs']->value;?>

<?php }
}
}
