<?php
/* Smarty version 3.1.29, created on 2016-04-06 20:18:07
  from "/var/www/htdocs/financial_control_php/comom/sidebar_menu_items.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5705992f440555_04718887',
  'file_dependency' => 
  array (
    '41769e6502f6509f4ee06e50c392f08a2486df81' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/comom/sidebar_menu_items.tpl',
      1 => 1459984685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5705992f440555_04718887 ($_smarty_tpl) {
if (isset($_SESSION['usuario'])) {?>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="periodo.php"><i class="fa fa-fw fa-table"></i> Planilha de Gastos Mensais</a>
            </li>
            <li>
                <a href="excluir.php"> <i class="fa fa-fw fa-remove"></i> Excluir Receitas e Despesas</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#incluir"><i class="fa fa-fw fa-plus"></i> Incluir <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="incluir" class="collapse">
                    <li>
                        <a href="incluir.php?tipo=RF"> Receita Fixa</a>
                    </li>
                    <li>
                        <a href="incluir.php?tipo=RV"> Receita Variável</a>
                    </li>
                    <li>
                        <a href="incluir.php?tipo=DF"> Despesa Fixa</a>
                    </li>
                    <li>
                        <a href="incluir.php?tipo=DV"> Despesa Variável</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
<?php } else { ?>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="login.php"><i class="fa fa-fw fa-dashboard"></i> Login</a>
            </li>
        </ul>
    </div>
<?php }
}
}
