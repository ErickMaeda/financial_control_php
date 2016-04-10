<?php
/* Smarty version 3.1.29, created on 2016-02-28 17:12:00
  from "/var/www/htdocs/financial_control_php/comom/top_menu_items.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d354901a5214_73786909',
  'file_dependency' => 
  array (
    '8c538687cb72793d27f39577cd428d04a40aa692' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/comom/top_menu_items.tpl',
      1 => 1456690316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d354901a5214_73786909 ($_smarty_tpl) {
?>
<ul class="nav navbar-right top-nav">       
    <?php if (isset($_SESSION['usuario'])) {?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['usuario']['email'];?>
 <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>      
        </li>
    <?php }?>
</ul><?php }
}
