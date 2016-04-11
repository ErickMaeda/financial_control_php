<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';

validSession();

$tipo = $_GET['tipo'];

if ($tipo == 'RF') {
    $title = 'RECEITA FIXA';
} elseif ($tipo == 'RV') {
    $title = 'RECEITA VARIAVEL';
} elseif ($tipo == 'DF') {
    $title = 'DESPESA FIXA';
} elseif ($tipo == 'DV') {
    $title = 'DESPESA VARIAVEL';
} else {
    header('Location: index.php');
}


$month[1] = 'JANEIRO';
$month[2] = 'FEVEREIRO';
$month[3] = 'MARCO';
$month[4] = 'ABRIL';
$month[5] = 'MAIO';
$month[6] = 'JUNHO';
$month[7] = 'JULHO';
$month[8] = 'AGOSTO';
$month[9] = 'SETEMBRO';
$month[10] = 'OUTUBRO';
$month[11] = 'NOVEMBRO';
$month[12] = 'DEZEMBRO';

global $conn;
$existente = mysql_query("SELECT * FROM movimentacao WHERE id_usuario = " . $_SESSION['usuario']['id_usuario'] . " GROUP BY des_movimentacao") or die(mysql_error());
$i = 0;
while ($value = mysql_fetch_object($existente)) {
    $des_movimentacao[$i] = $value->des_movimentacao;
    $id_movimentacao[$i] = $value->id_movimentacao;
    $i = $i + 1;
}


$smarty = new Smarty();
$smarty->assign('mes', $month);
$smarty->assign('mesSelected', date('m'));
$smarty->assign('tipo', $tipo);
$smarty->assign('des_movimentacao', $des_movimentacao);
$smarty->assign('id_movimentacao', $id_movimentacao);
$smarty->assign('title', $title);
$smarty->display('incluir.tpl');

