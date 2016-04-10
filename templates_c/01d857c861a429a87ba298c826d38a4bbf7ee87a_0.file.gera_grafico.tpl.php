<?php
/* Smarty version 3.1.29, created on 2016-04-10 17:49:05
  from "/var/www/htdocs/financial_control_php/gera_grafico.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570abc4166e116_71810501',
  'file_dependency' => 
  array (
    '01d857c861a429a87ba298c826d38a4bbf7ee87a' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/gera_grafico.tpl',
      1 => 1460321338,
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
function content_570abc4166e116_71810501 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="js/jquery-2.2.1.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./js/utils.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"><?php echo '</script'; ?>
>

    <body>
        <div id="wrapper">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/navbar_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane fade active in">
                            <div class="panel panel-default">    
                                <div class="panel-body " >
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        $(document).ready(function () {
                                            var options = {
                                                chart: {
                                                    renderTo: 'container',
                                                    plotBackgroundColor: null,
                                                    plotBorderWidth: null,
                                                    plotShadow: false
                                                },
                                                title: {
                                                    text: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                                                },
                                                tooltip: {
                                                    formatter: function () {
                                                        return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                                                    }
                                                },
                                                plotOptions: {
                                                    pie: {
                                                        allowPointSelect: true,
                                                        cursor: 'pointer',
                                                        dataLabels: {
                                                            enabled: true,
                                                            color: '#000000',
                                                            connectorColor: '#000000',
                                                            formatter: function () {
                                                                return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                                                            }
                                                        }
                                                    }
                                                },
                                                series: [{
                                                        type: 'pie',
                                                        name: 'Browser share',
                                                        data: []
                                                    }]
                                            }

                                            $.getJSON("gera_grafico.php", function (json) {
                                                options.series[0].data = json;
                                                chart = new Highcharts.Chart(options);
                                            });
                                        });
                                    <?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 src="http://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
>
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /#page-wrapper -->
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html>


<?php }
}
