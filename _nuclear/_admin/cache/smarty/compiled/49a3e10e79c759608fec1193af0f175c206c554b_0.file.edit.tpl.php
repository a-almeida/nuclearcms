<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:42:20
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/menus/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e2227c932d91_94308513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49a3e10e79c759608fec1193af0f175c206c554b' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/partials/menus/edit.tpl',
      1 => 1457571038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2227c932d91_94308513 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo PUBLICPATH;?>
assets/css/summernote.css">
<section class="panel panel-default">
    <header class="panel-heading">Gerir / <?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
</header>
    <div class="panel-body">
		<div class="container-fluid">
		<form action="<?php echo PUBLICPATH;?>
p/cms/menus/<?php echo $_smarty_tpl->tpl_vars['nmethod']->value;?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'foo', false, 'fokey');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_0_saved = $_smarty_tpl->tpl_vars['foo'];
?>
                               <option value="categorie/<?php echo $_smarty_tpl->tpl_vars['foo']->value->groupsSLUG;?>
" <?php if (('categorie/').($_smarty_tpl->tpl_vars['foo']->value->groupsSLUG) == $_smarty_tpl->tpl_vars['content']->value['results']->menuLINK) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value->groupsNAME;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value->childs['results'], 'foo2', false, 'fokey2');
foreach ($_from as $_smarty_tpl->tpl_vars['fokey2']->value => $_smarty_tpl->tpl_vars['foo2']->value) {
$_smarty_tpl->tpl_vars['foo2']->_loop = true;
$__foreach_foo2_1_saved = $_smarty_tpl->tpl_vars['foo2'];
?>
                               <option value="categorie/<?php echo $_smarty_tpl->tpl_vars['foo']->value->groupsSLUG;?>
/<?php echo $_smarty_tpl->tpl_vars['foo2']->value->articlesSLUG;?>
" <?php if (((('categorie/').($_smarty_tpl->tpl_vars['foo']->value->groupsSLUG)).('/')).($_smarty_tpl->tpl_vars['foo2']->value->articlesSLUG) == $_smarty_tpl->tpl_vars['content']->value['results']->menuLINK) {?> selected<?php }?>> &nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['foo2']->value->articlesTITLE;?>
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
