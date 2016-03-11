<?php
/* Smarty version 3.1.30-dev/51, created on 2016-03-11 01:30:30
  from "/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/common/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/51',
  'unifunc' => 'content_56e21fb6e164b9_92482641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd681ec19b3fb90fc2acc081348b0308fe71a8610' => 
    array (
      0 => '/home/ptlivrep/public_html/centrosocialcs.pt/demo/_nuclear/_admin/views/default/common/navbar.tpl',
      1 => 1457489166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e21fb6e164b9_92482641 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="topnav">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top responsive " style="z-index:90">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo PUBLICPATH;
echo MODULECALL;?>
/">
            <span>Gestor</span> de conteúdos</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if (isset($_smarty_tpl->tpl_vars['verisset']->value)) {?><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/profiles">Profile</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/password">Change Passoword</a></li>
                </ul>
              </li>
              <?php }?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

</header><?php }
}
