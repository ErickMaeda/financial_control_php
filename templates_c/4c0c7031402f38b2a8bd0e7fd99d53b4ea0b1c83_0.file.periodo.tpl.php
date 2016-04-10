<?php
/* Smarty version 3.1.29, created on 2016-04-09 17:12:51
  from "/var/www/htdocs/financial_control_php/periodo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57096243481f02_79417036',
  'file_dependency' => 
  array (
    '4c0c7031402f38b2a8bd0e7fd99d53b4ea0b1c83' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/periodo.tpl',
      1 => 1460232757,
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
function content_57096243481f02_79417036 ($_smarty_tpl) {
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
                                        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                                    </h1>
                                </div>
                            </div>
                            <div class="panel panel-default">    
                                <div class="panel-body ">
                                    <div class="row col-lg-12">
                                        <h1 class="panel-title text-center">
                                            <b><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</b>
                                        </h1>
                                    </div>

                                    <div class="row">
                                    </div>

                                    <form role="form" action="spreadsheet.php" method="POST" enctype="multipart/form-data" onsubmit="return validaForm();">
                                        <div class="row">             
                                            <hr>
                                            <div class="col-lg-6">
                                                <label for="month_start">Mes: </label>
                                                <select name="month_start" id="month_start" class="form-control btn btn-default col-lg-6">
                                                    <option value="0">SELECIONAR</option>
                                                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['monthValue']->value,'output'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>

                                                </select>  
                                            </div>

                                            <div class="col-lg-6">
                                                <label for="year_start">Ano: </label>
                                                <input type="text" id="year_start" name="year_start" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
">
                                            </div>
                                        </div>

                                        <div class="row col-lg-12">
                                            <h1 class="panel-title text-center">
                                                <hr>
                                                <b>Até</b>
                                                <hr>
                                            </h1>
                                        </div>

                                        <div class="row">             
                                            <div class="col-lg-6">
                                                <label for="month_final">Mes: </label>
                                                <select name="month_final" id="month_final" class="form-control btn btn-default col-lg-6">
                                                    <option value="0">SELECIONAR</option>
                                                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['monthValue']->value,'output'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>

                                                </select>  
                                            </div>

                                            <div class="col-lg-6">
                                                <label for="year_final">Ano: </label>
                                                <input type="text" id="year_final" name="year_final" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" value="send" id="send" class="btn btn-default col-lg-12" >ENVIAR</button>
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
 type="text/javascript" src="./js/period.js"><?php echo '</script'; ?>
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
