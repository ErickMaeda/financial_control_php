<?php
/* Smarty version 3.1.29, created on 2016-04-06 20:38:08
  from "/var/www/htdocs/financial_control_php/gravar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57059de08478e0_43960716',
  'file_dependency' => 
  array (
    '9b1daba9c7aa816d6ca0572360fc7013040fbb27' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/gravar.tpl',
      1 => 1459985208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comom/head.tpl' => 1,
    'file:comom/navbar_top.tpl' => 1,
    'file:comom/footer.tpl' => 1,
  ),
),false)) {
function content_57059de08478e0_43960716 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <div id="wrapper">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/navbar_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        Controle de Gastos Mensais
                                    </h1>
                                </div>
                            </div>
                            <div class="panel panel-default">    
                                <div class="panel-body ">
                                    <div class="row col-lg-12">
                                        <h1 class="panel-title text-center">
                                            <b>INCLUSÃO REALIZADA COM SUCESSO</b>
                                        </h1>
                                    </div>
                                    <a href="incluir.php?tipo=<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
" class="btn btn-default">Inserir outro</a>
                                    <a href="home.php" class="btn btn-default">Retornar ao Menu Principal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>

        <?php echo '<script'; ?>
 src="js/jquery-2.2.1.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./js/incluir.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./js/utils.js"><?php echo '</script'; ?>
>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html>
<?php }
}
