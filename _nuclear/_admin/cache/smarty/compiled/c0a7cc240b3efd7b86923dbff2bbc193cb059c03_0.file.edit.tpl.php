<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-10 01:21:56
  from "X:\_work\dev\_nuclear\v0.12\_nuclear\_admin\views\default\partials\features\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e0be246311b0_34387386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a7cc240b3efd7b86923dbff2bbc193cb059c03' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\v0.12\\_nuclear\\_admin\\views\\default\\partials\\features\\edit.tpl',
      1 => 1457569314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e0be246311b0_34387386 (Smarty_Internal_Template $_smarty_tpl) {
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
                               <h5>Descrição Curta</h5> </label>
                                <input type="text" name="descrit" class="form-control" id="descrit" placeholder="Descrição curta" required="required" 
                                value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesSUBTITLE;?>
" />
                        </div>
                         <div class="form-group">
                            <label for="descrit" style="float:left">
                               <h5>Destino</h5> </label>
                               <div class="col-xs-6">
                               <select class="form-control " name="link"  >
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
                               <option value="categorie/<?php echo $_smarty_tpl->tpl_vars['foo']->value->groupsSLUG;?>
" <?php if (('categorie/').($_smarty_tpl->tpl_vars['foo']->value->groupsSLUG) == $_smarty_tpl->tpl_vars['content']->value->articlesLINK) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value->groupsNAME;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value->childs['results'], 'foo2', false, 'fokey2');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey2']->value => $_smarty_tpl->tpl_vars['foo2']->value) {
$_smarty_tpl->tpl_vars['foo2']->_loop = true;
$__foreach_foo2_1_saved = $_smarty_tpl->tpl_vars['foo2'];
?>
                               <option value="categorie/<?php echo $_smarty_tpl->tpl_vars['foo']->value->groupsSLUG;?>
/<?php echo $_smarty_tpl->tpl_vars['foo2']->value->articlesSLUG;?>
" <?php if (((('categorie/').($_smarty_tpl->tpl_vars['foo']->value->groupsSLUG)).('/')).($_smarty_tpl->tpl_vars['foo2']->value->articlesSLUG) == $_smarty_tpl->tpl_vars['content']->value->articlesLINK) {?> selected<?php }?>> &nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['foo2']->value->articlesTITLE;?>
</option>
                                 <?php
$_smarty_tpl->tpl_vars['foo2'] = $__foreach_foo2_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                
                                 <?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                               </select>
                               </div>
                              
                        </div>
                    </div>
                     <div class="col-md-5">
	                   <div class="form-group">
	                     		<img src="<?php echo PUBLICPATH;?>
uploads/sm/<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesIMG;?>
" width="100%"/>
	                            <label for="image"><h5>Imagem</h5></label>
	                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getimage(this)">Alterar Imagem</button>
								<input type="hidden" name="image" class="form-control" id="image" placeholder="Imagem" required="required" 
	                                value="<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesIMG;?>
" />
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
p/cms/features/delete/<?php echo $_smarty_tpl->tpl_vars['content']->value->articlesSLUG;?>
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
