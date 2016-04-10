<?php
require_once './sessionUtils.php';
require_once './config.php';

// ------ definicao dos dados ----------
$data = $_GET['data'];
$sql = "SELECT * FROM movimentacao WHERE id_usuario={$_SESSION['usuario']['id_usuario']} and dt_movimentacao='$data' and (movimentacao_tipo='DF' or movimentacao_tipo='DV')";
$res = mysql_query($sql) or die(mysql_error());

$rows = array();
while ($r = mysql_fetch_object($res)) {
    $row[0] = $r->des_movimentacao;
    $row[1] = $r->custo;
    array_push($rows, $row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);
?>