<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';

validSession();

if (!isset($_POST['tipo'])) {
    header('Location: index.php');
}

$tipo = $_POST['tipo'];
$month = $_POST['mes'];
$ano = $_POST['ano'];
$valor = $_POST['valor'];
$data = $ano . '-' . $month . '-' . date('d');

mysql_query(""
        . "INSERT INTO `movimentacao`"
        . "(`id_usuario`,`des_movimentacao`,`movimentacao_tipo`,`dt_movimentacao`,`custo`,`stat`)"
        . "VALUES('" . $_SESSION['usuario']['id_usuario'] . "' ,'" . $_POST['descricao'] . "', '$tipo', '$data', '$valor', '1');"
) or die(mysql_error());

if (mysql_affected_rows() > 0) {
    $smarty = new Smarty();
    $smarty->assign('tipo', $tipo);
    $smarty->display('gravar.tpl');
}
