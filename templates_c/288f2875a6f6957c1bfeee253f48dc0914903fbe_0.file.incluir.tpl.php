<?php
/* Smarty version 3.1.29, created on 2016-04-10 20:52:49
  from "/var/www/htdocs/financial_control_php/incluir.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570ae75104c1c1_00408253',
  'file_dependency' => 
  array (
    '288f2875a6f6957c1bfeee253f48dc0914903fbe' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/incluir.tpl',
      1 => 1460332366,
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
function content_570ae75104c1c1_00408253 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/htdocs/financial_control_php/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/htdocs/financial_control_php/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
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
                                            <b>INCLUSÃO DE <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
                                        </h1>
                                    </div>
                                    <br>
                                    <div class="row col-lg-12">
                                        <h3>Descricao: </h3>
                                    </div>
                                    <br>
                                    <form role="form" action="gravar.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data" onsubmit="return validaForm();">
                                        <input type="hidden" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="radio" id="radio" name="radio" value="Nova" class="radio-inline" checked="true"> <label for="descricao">Nova</label>
                                                <input type="text" id="descricao" name="descricao" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="radio" id="radio" name="radio" value="Existente" class="radio-inline "> <label for="descricao_existente" >Existente</label>
                                                <select name="descricao" id="descricao_existente" class="form-control btn btn-default col-lg-6" disabled="true">
                                                    <option value="0">SELECIONAR</option>
                                                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['des_movimentacao']->value,'output'=>$_smarty_tpl->tpl_vars['des_movimentacao']->value),$_smarty_tpl);?>

                                                </select>  
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="mes">Mes: </label>
                                                    <select name="mes" id="mes" class="form-control btn btn-default col-lg-3">
                                                        <?php echo smarty_function_html_options(array('selected'=>$_smarty_tpl->tpl_vars['mesSelected']->value,'options'=>$_smarty_tpl->tpl_vars['mes']->value),$_smarty_tpl);?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="ano">Ano: </label>
                                                    <input type="text" id="ano" name="ano" maxlength="4" class="form-control col-lg-3" value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="valor">Valor: </label>
                                                    <input type="number" id="valor" name="valor" class="form-control col-lg-3">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" value="salvar" id="salvar" class="btn btn-default col-lg-12" >SALVAR</button>
                                            </div>
                                        </div>
                                    </form>
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
