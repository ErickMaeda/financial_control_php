<?php
/* Smarty version 3.1.29, created on 2016-04-10 11:36:41
  from "/var/www/htdocs/financial_control_php/excluir.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570a64f9aa0767_14739786',
  'file_dependency' => 
  array (
    '9cefadc46438174034442b2fed3fc14da7f79be5' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/excluir.tpl',
      1 => 1460299000,
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
function content_570a64f9aa0767_14739786 ($_smarty_tpl) {
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
                                <div class="panel-body " >
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>CODIGO</th>
                                                <th>Descrição</th>
                                                <th>Tipo</th>
                                                <th>Data de Cadastro</th>
                                                <th>Custo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['movimentacoes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_0_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_0_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
                                                <tr>                                                                
                                                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value->id_movimentacao;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value->des_movimentacao;?>
</td>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['linha']->value->movimentacao_tipo;?>
</th>
                                                    <th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linha']->value->dt_movimentacao,"%d/%m/%Y");?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['linha']->value->custo;?>
 R$</th>
                                                    <th>                   
                                                        <a href="excluir.php?id_movimentacao=<?php echo $_smarty_tpl->tpl_vars['linha']->value->id_movimentacao;?>
">Deletar</a>
                                                    </th>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
                                                <tr><td colspan="100%">Tabela Vazia</td></tr>
                                            <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>          
                                        </tbody>
                                    </table>   
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /#page-wrapper -->
                </div>
            </div>
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
