<?php
/* Smarty version 3.1.29, created on 2016-04-10 18:27:25
  from "/var/www/htdocs/financial_control_php/spreadsheet.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570ac53d375689_19567446',
  'file_dependency' => 
  array (
    '8622a8412b93ac624cd116e94afcf5e0bc40c193' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/spreadsheet.tpl',
      1 => 1460323637,
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
function content_570ac53d375689_19567446 ($_smarty_tpl) {
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
                                    <div class="row col-lg-12">
                                        <h2>Receitas</h2>
                                    </div>
                                    <table class="table table-striped col-lg-12">
                                        <thead>
                                            <tr>
                                                <th>Descricao</th>
                                                <th>Tipo</th>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_receita']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_collum_0_saved_item = isset($_smarty_tpl->tpl_vars['collum']) ? $_smarty_tpl->tpl_vars['collum'] : false;
$_smarty_tpl->tpl_vars['collum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['collum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['collum']->value) {
$_smarty_tpl->tpl_vars['collum']->_loop = true;
$__foreach_collum_0_saved_local_item = $_smarty_tpl->tpl_vars['collum'];
?>
                                                    <th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['collum']->value,"%d/%m/%Y");?>
</th>
                                                    <?php
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_0_saved_local_item;
}
if ($__foreach_collum_0_saved_item) {
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_0_saved_item;
}
?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['receitas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_1_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_1_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
                                                <tr>    
                                                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value->des_movimentacao;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value->movimentacao_tipo;?>
</td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_receita']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_collum_2_saved_item = isset($_smarty_tpl->tpl_vars['collum']) ? $_smarty_tpl->tpl_vars['collum'] : false;
$_smarty_tpl->tpl_vars['collum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['collum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['collum']->value) {
$_smarty_tpl->tpl_vars['collum']->_loop = true;
$__foreach_collum_2_saved_local_item = $_smarty_tpl->tpl_vars['collum'];
?>
                                                        <th>
                                                            <?php if (($_smarty_tpl->tpl_vars['linha']->value->dt_movimentacao == $_smarty_tpl->tpl_vars['collum']->value)) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['linha']->value->custo;?>

                                                            <?php } else { ?>
                                                                -----
                                                            <?php }?>
                                                        </th>
                                                    <?php
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_2_saved_local_item;
}
if ($__foreach_collum_2_saved_item) {
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_2_saved_item;
}
?>
                                                </tr>

                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
                                                <tr><td colspan="100%">Tabela Vazia</td></tr>
                                            <?php
}
if ($__foreach_linha_1_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_item;
}
?>  
                                            <?php if (($_smarty_tpl->tpl_vars['receitas']->value)) {?>
                                                <tr>    
                                                    <td>Total por data: </td>
                                                    <td>------</td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['receitasByDate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_collum_3_saved_item = isset($_smarty_tpl->tpl_vars['collum']) ? $_smarty_tpl->tpl_vars['collum'] : false;
$_smarty_tpl->tpl_vars['collum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['collum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['collum']->value) {
$_smarty_tpl->tpl_vars['collum']->_loop = true;
$__foreach_collum_3_saved_local_item = $_smarty_tpl->tpl_vars['collum'];
?>
                                                        <th>
                                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['collum']->value)===null||$tmp==='' ? 0 : $tmp);?>

                                                        </th>
                                                    <?php
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_3_saved_local_item;
}
if ($__foreach_collum_3_saved_item) {
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_3_saved_item;
}
?>
                                                </tr>
                                                <tr><td colspan="100%">Total de receitas: <b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['receitas_total']->value)===null||$tmp==='' ? 0 : $tmp);?>
</b></td></tr>                                                
                                            <?php }?>
                                        </tbody>
                                    </table>  
                                </div>
                            </div>

                            <div class="panel panel-default">    
                                <div class="panel-body " >
                                    <div class="row col-lg-12">
                                        <h2>Despesas</h2>
                                    </div>
                                    <table class="table table-striped col-lg-12">
                                        <thead>
                                            <tr>
                                                <th>Descricao</th>
                                                <th>Tipo</th>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_despesa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_collum_4_saved_item = isset($_smarty_tpl->tpl_vars['collum']) ? $_smarty_tpl->tpl_vars['collum'] : false;
$_smarty_tpl->tpl_vars['collum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['collum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['collum']->value) {
$_smarty_tpl->tpl_vars['collum']->_loop = true;
$__foreach_collum_4_saved_local_item = $_smarty_tpl->tpl_vars['collum'];
?>
                                                    <th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['collum']->value,"%d/%m/%Y");?>
</th>
                                                    <?php
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_4_saved_local_item;
}
if ($__foreach_collum_4_saved_item) {
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_4_saved_item;
}
?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['despesas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_5_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_5_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
                                                <tr>    
                                                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value->des_movimentacao;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value->movimentacao_tipo;?>
</td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_despesa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_collum_6_saved_item = isset($_smarty_tpl->tpl_vars['collum']) ? $_smarty_tpl->tpl_vars['collum'] : false;
$_smarty_tpl->tpl_vars['collum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['collum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['collum']->value) {
$_smarty_tpl->tpl_vars['collum']->_loop = true;
$__foreach_collum_6_saved_local_item = $_smarty_tpl->tpl_vars['collum'];
?>
                                                        <th>
                                                            <?php if (($_smarty_tpl->tpl_vars['linha']->value->dt_movimentacao == $_smarty_tpl->tpl_vars['collum']->value)) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['linha']->value->custo;?>

                                                            <?php } else { ?>
                                                                -----
                                                            <?php }?>
                                                        </th>
                                                    <?php
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_6_saved_local_item;
}
if ($__foreach_collum_6_saved_item) {
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_6_saved_item;
}
?>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_5_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
                                                <tr><td colspan="100%">Tabela Vazia</td></tr>
                                            <?php
}
if ($__foreach_linha_5_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_5_saved_item;
}
?>   
                                            <?php if (($_smarty_tpl->tpl_vars['despesas']->value)) {?>
                                                <tr>    
                                                    <td>Total por data: </td>
                                                    <td>------</td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['despesasByDate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_collum_7_saved_item = isset($_smarty_tpl->tpl_vars['collum']) ? $_smarty_tpl->tpl_vars['collum'] : false;
$_smarty_tpl->tpl_vars['collum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['collum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['collum']->value) {
$_smarty_tpl->tpl_vars['collum']->_loop = true;
$__foreach_collum_7_saved_local_item = $_smarty_tpl->tpl_vars['collum'];
?>
                                                        <th>
                                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['collum']->value)===null||$tmp==='' ? 0 : $tmp);?>

                                                        </th>
                                                    <?php
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_7_saved_local_item;
}
if ($__foreach_collum_7_saved_item) {
$_smarty_tpl->tpl_vars['collum'] = $__foreach_collum_7_saved_item;
}
?>
                                                </tr>
                                                <tr><td colspan="100%">Total de receitas: <b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['despesas_total']->value)===null||$tmp==='' ? 0 : $tmp);?>
</b></td></tr>                                                
                                            <?php }?>
                                        </tbody>
                                    </table>  
                                </div>
                            </div>

                            <?php if (($_smarty_tpl->tpl_vars['colluns_despesa']->value)) {?>
                                <div class="panel panel-default">    
                                    <div class="panel-body " >
                                        <div class="row col-lg-12">
                                            <h2>EXPORTAR</h2>
                                        </div>
                                        <table class="table table-striped col-lg-12">
                                            <thead>
                                                <tr>
                                                    <td>EXPORTAR PARA: </td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_despesa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_date_8_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['date']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
$__foreach_date_8_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
                                                        <td><b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d/%m/%Y");?>
</b></td>
                                                    <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_8_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['date']->_loop) {
?>
                                                        <td colspan="100%">Tabela Vazia</td>
                                                    <?php
}
if ($__foreach_date_8_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_8_saved_item;
}
?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>   
                                                    <td>GRAFICO: </td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_despesa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_date_9_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['date']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
$__foreach_date_9_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
                                                        <td><a target = '_blank' href="grafico.php?data=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><img src="storage/chart.png" style="width: 50px"></a></td>
                                                            <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_9_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['date']->_loop) {
?>
                                                        <td colspan="100%">------</td>
                                                    <?php
}
if ($__foreach_date_9_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_9_saved_item;
}
?>
                                                </tr>
                                                <tr>    
                                                    <td>PDF</td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_despesa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_date_10_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['date']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
$__foreach_date_10_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
                                                        <td><a target = '_blank' href="gera_pdf.php?data=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><img src="storage/pdf.png" style="width: 50px"></a></td>
                                                            <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_10_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['date']->_loop) {
?>
                                                        <td colspan="100%">------</td>
                                                    <?php
}
if ($__foreach_date_10_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_10_saved_item;
}
?>
                                                </tr>
                                                <tr>    
                                                    <td>E-MAIL</td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['colluns_despesa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_date_11_saved_item = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['date']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
$__foreach_date_11_saved_local_item = $_smarty_tpl->tpl_vars['date'];
?>
                                                        <td><a target = '_blank' href="gera_email.php?data=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><img src="storage/email.png" style="width: 50px"></a></td>
                                                            <?php
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_11_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['date']->_loop) {
?>
                                                        <td colspan="100%">------</td>
                                                    <?php
}
if ($__foreach_date_11_saved_item) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_date_11_saved_item;
}
?>
                                                </tr>
                                                <tr>    
                                                    <td>SALDO TOTAL</td>
                                                    <td><h2><b><?php echo $_smarty_tpl->tpl_vars['receitas_total']->value-$_smarty_tpl->tpl_vars['despesas_total']->value;?>
</b></h2></td>
                                                </tr>
                                            </tbody>
                                        </table>  
                                    <?php }?>
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
