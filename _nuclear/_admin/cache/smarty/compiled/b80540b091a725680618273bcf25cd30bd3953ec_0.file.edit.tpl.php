<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 21:29:17
  from "X:\_work\dev\_nuclear\clean\_nuclear\_admin\views\default\partials\menus\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e32a9debd8f6_30368145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b80540b091a725680618273bcf25cd30bd3953ec' => 
    array (
      0 => 'X:\\_work\\dev\\_nuclear\\clean\\_nuclear\\_admin\\views\\default\\partials\\menus\\edit.tpl',
      1 => 1457728147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e32a9debd8f6_30368145 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo PUBLICPATH;?>
assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
    <div class="panel-body">
		<div class="container-fluid">
		<form action="<?php echo PUBLICPATH;
echo ADMINFOLDER;?>
/cms/menus/<?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['naction']->value;?>
" method="post">		
                <div class="row">
                    <div class="col-md-7">
                       <div class="form-group">
                            <label for="title"  style="float:left">
                               <h5>Nome</h5> </label>
                                <div class="col-xs-8"> 
                            <input type="text" class="form-control" name="title"  id="title" placeholder="título" required="required" value="<?php echo $_smarty_tpl->tpl_vars['content']->value['results']->menuNAME;?>
" />
                            </div>
                            <div style="clear:both"></div>
                        </div>
                         <div class="form-group">
                            <label for="descrit" style="float:left">
                               <h5>Destino</h5> </label>
                               <div class="col-xs-6">
                               <select class="form-control " name="link"  >
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value['results'], 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
                               <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesSLUG;?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value->articlesSLUG == $_smarty_tpl->tpl_vars['content']->value['results']->menuLINK) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value->articlesNAME;?>
</option>
                               
                                
                                 <?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                               </select>
                               </div>
                              
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
<?php }
}
