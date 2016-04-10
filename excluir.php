<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';

validSession();

if (isset($_GET['id_movimentacao'])) {
    $sql = "DELETE FROM movimentacao ";
    $sql .= "WHERE id_movimentacao={$_GET['id_movimentacao']}";
    $res = mysql_query($sql) or die(mysql_error());
}

$sql = "SELECT * FROM movimentacao ";
$sql .= "WHERE id_usuario='{$_SESSION['usuario']['id_usuario']}' AND stat <> 0 order by id_movimentacao,dt_movimentacao,des_movimentacao";
$res = mysql_query($sql) or die(mysql_error());
$i = 1;

while ($value = mysql_fetch_object($res)) {
    $movimentacoes[] = $value;
    $i = $i + 1;
}

$smarty = new Smarty();
$smarty->assign('movimentacoes', $movimentacoes);
$smarty->assign('title', 'Planilha de Gastos Mensais');
$smarty->display('excluir.tpl');

