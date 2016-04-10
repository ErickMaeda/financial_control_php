<?php
/* Smarty version 3.1.29, created on 2016-04-06 20:27:49
  from "/var/www/htdocs/financial_control_php/comom/navbar_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57059b7514b446_06761053',
  'file_dependency' => 
  array (
    'fb0ccc491d6642e437ebb3c4e45f9f58dbc7f9f2' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/comom/navbar_top.tpl',
      1 => 1459985167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comom/top_menu_items.tpl' => 1,
    'file:comom/sidebar_menu_items.tpl' => 1,
  ),
),false)) {
function content_57059b7514b446_06761053 ($_smarty_tpl) {
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Controle Financeiro</a>
    </div>
    <!-- Top Menu Items -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/top_menu_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/sidebar_menu_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- /.navbar-collapse -->
</nav><?php }
}
