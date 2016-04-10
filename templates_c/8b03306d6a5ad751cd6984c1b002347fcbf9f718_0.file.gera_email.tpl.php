<?php
/* Smarty version 3.1.29, created on 2016-04-10 16:30:28
  from "/var/www/htdocs/financial_control_php/gera_email.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570aa9d4e72af1_33732271',
  'file_dependency' => 
  array (
    '8b03306d6a5ad751cd6984c1b002347fcbf9f718' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/gera_email.tpl',
      1 => 1460316627,
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
function content_570aa9d4e72af1_33732271 ($_smarty_tpl) {
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
                                            <b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
                                        </h1>
                                    </div>
                                    <br>
                                    <form role="form" action="gera_email.php?data=<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="hidden" name="data" value=<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
>
                                                <label for="email">Seu e-mail: </label>
                                                <input class="form-control col-lg-12" type="text" name="email" size="30">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="message">Descrição</label>
                                                <input type="text" id="message" name="message"  class="form-control col-lg-12">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="submit" id="enviar" name="enviar" value="ENVIAR" class="form-control col-lg-12">
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 type="text" id="errorText" name="errorText" class="text-danger"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['textError']->value)===null||$tmp==='' ? '' : $tmp);?>
 </h2>
                                        </div>
                                    </div>
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
 type="text/javascript" src="./js/utils.js"><?php echo '</script'; ?>
>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html>
<?php }
}
